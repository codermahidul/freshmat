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

    public function passwordReset($token,$email){

        $resetRecord = DB::table('password_reset_tokens')
        ->where('email', $email)
        ->first();

        if (!$resetRecord || !Hash::check($token, $resetRecord->token)) {
            toast(trans('This password reset token is invalid.'), 'error')->width('350');
            return redirect()->route('reset.password');
        }

    // Show the reset form
    return view('auth.passwords.reset')->with([
        'token' => $token,
        'email' => $email,
    ]);
    }

    public function reset(Request $request){
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $resetRecord = DB::table('password_reset_tokens')
        ->where('email', $request->email)
        ->first();

        if (!$resetRecord || !Hash::check($request->token, $resetRecord->token)) {
            toast(trans('This password reset token is invalid.'), 'error')->width('350');
            return redirect()->route('reset.password');
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            toast(trans('No user found with this email address.'), 'error')->width('350');
            return redirect()->route('reset.password');
        }

        $user->password = Hash::make($request->input('password'));
        $user->save();


        DB::table('password_reset_tokens')
            ->where('email', $request->input('email'))
            ->delete();

        toast(trans('Your password has been reset successfully!'), 'success')->width('350');
        return redirect()->route('login');
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';
}
