<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    //use ResetsPasswords;

    public function passwordReset(Request $request, $token){
        // Retrieve the password reset record by email
    $passwordReset = DB::table('password_resets')->where('email', $request->email)->first();

    if (!$passwordReset || !Hash::check($token, $passwordReset->token)) {
        // Token is invalid or expired
        toast(trans('This password reset token is invalid.'),'error')->width('350');
        return redirect()->route('reset.password');
    }

    // Show the reset form
    return view('auth.passwords.reset')->with([
        'token' => $token,
    ]);
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';
}
