<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

    // Check if the user exists in your system
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->google_id !== null || $user->facebook_id !== null) {
                return back()->with('status', 'Password cannot be changed. Because this email was used for social login.');
            }
        } else {
            return back()->withErrors(['email' => 'We can\'t find a user with that email address.']);
        }
        $this->broker()->sendResetLink(
            $request->only('email')
        );

        return back()->with('status', trans('passwords.sent'));

    }
}
