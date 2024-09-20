<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showResetForm(Request $request){
        return view('auth.passwords.email');
    }

    public function sendMail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            toast(trans('passwords.user'), 'error')->width('350');
            return back();
        }

        // Create the password reset token
        $token = Password::broker()->createToken($user);
        // Send the custom password reset email
        mailServer();
        $data= [
            'token' => $token,
            'email' => $user->email,
        ];


        Mail::to($user->email)->send(new ResetPasswordMail($data));

        toast(trans('passwords.sent'),'success')->width('350');
        return back();
    }

}
