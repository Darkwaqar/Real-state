<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();

    }
    public function handleFacebookCallback(){
        try {
            $user = Socialite::driver('facebook')->user();

            // Check if User Email Already Exists
            $existingUser = User::where('email', $user->getEmail())->first();

            if (!$existingUser) {
                $isAgent = Str::endsWith($user->getEmail(), '@aris360.com');
                $newUserData = [
                    'first_name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'role_id' => $isAgent ? 2 :  getUserRole(), // Make sure getUserRole() returns the correct role ID (5 for simple users)
                    'password' => bcrypt(Str::random(16)), // Use a secure password generation method
                    'email_verified_at' => Carbon::now(), // You should send a verification email to the user
                    'status' => 1,
                    'user_dp' => filter_var($user->getAvatar(), FILTER_VALIDATE_URL) ? $user->getAvatar() : null, // Validate avatar URL
                    'created_at' => Carbon::now(),
                    'slug' => createSEOUrl($user->getName()),
                ];

                $saveUser = User::create($newUserData);
            } else {
                $existingUser->facebook_id = $user->getId();
                $existingUser->save();
                $saveUser = $existingUser;
            }

            // Log in the user after successful registration or login
            Auth::login($saveUser);
        } catch (Exception $e) {
            // Handle the exception
            dd($e->getMessage());
        }


    }
}
