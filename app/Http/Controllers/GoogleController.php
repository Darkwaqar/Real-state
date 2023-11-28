<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Jobs\GoogleSignUpJob;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if User Email Already Exists
            $existingUser = User::where('email', $user->getEmail())->first();

            if (!$existingUser) {
                $isAgent = Str::endsWith($user->getEmail(), '@aris360.com');
                $nameParts = explode(' ', $user->getName());
                $firstName = $nameParts[0];
                $lastName = (count($nameParts) > 1) ? implode(' ', array_slice($nameParts, 1)) : '';
                $avatarUrl = $user->getAvatar();
                $avatarContents = file_get_contents($avatarUrl);
                $filename = Str::random(20) . '.jpg';
                $image = imagecreatefromstring($avatarContents);
                imagejpeg($image, public_path('images/userdp/' . $filename));
                imagedestroy($image);
                $newUserData = [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $user->getEmail(),
                    'role_id' => $isAgent ? 2 :  getUserRole(), // Make sure getUserRole() returns the correct role ID (5 for simple users)
                    'password' => bcrypt(Str::random(16)), // Use a secure password generation method
                    'email_verified_at' => Carbon::now(),
                    'status' => 1,
                    'user_dp' => $filename,
                    'created_at' => Carbon::now(),
                    'slug' => createSEOUrl($user->getName()),
                ];
                $saveUser = User::create($newUserData);
                $data['user'] = User::where('id', $saveUser->id)->first()->toArray();
                $data['type'] = 'Google  Sign Up';
                $data['message'] = 'New User (' . $saveUser->first_name . ')  Signed Up with Google';
                $data['time'] = Carbon::now();
                $data['is_read'] = false;
                $data['path'] = asset('public/images/userdp/');
                $data['link'] = url('admin/user-signed-up/' . $saveUser->id);
                $link = 'admin/user-signed-up/' . $saveUser->id;
                createNotification($saveUser->id, 'New User Google  Sign Up', 'New User (' . $firstName . ') Signed Up with Google', 'Google  Sign Up', null, null, null, $link);
                event(new UserNotification($data));
                GoogleSignUpJob::dispatch($saveUser);
            } else {
                $existingUser->google_id = $user->getId();
                $existingUser->save();
                $saveUser = $existingUser;
            }

            // Log in the user after successful registration or login
            Auth::login($saveUser);
            return redirect()->route('userSimpleDashboard');
        } catch (Exception $e) {
            throw $e;
        }
    }
}
