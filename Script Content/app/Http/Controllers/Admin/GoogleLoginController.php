<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserProfile;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(){
        googleLogin();
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        googleLogin();
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email',$googleUser->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => Hash::make(rand(100000,999999)),
            ]);

            UserProfile::insert([
                'userId' => $user->id,
                'photo' => $googleUser->avatar,
            ]);
        }

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
