<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserProfile;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends Controller
{
    public function redirectToFacebook(){
        facebookLogin();
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){
        facebookLogin();
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $user = User::where('email',$facebookUser->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $facebookUser->name,
                'email' => $facebookUser->email,
                'password' => Hash::make(rand(100000,999999)),
            ]);

            UserProfile::insert([
                'userId' => $user->id,
                'photo' => $facebookUser->avatar,
            ]);
        }

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

}
