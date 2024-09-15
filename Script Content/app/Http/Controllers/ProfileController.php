<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);


        if (!Hash::check($request->input('current_password'),Auth::user()->password)) {
            throw ValidationException::withMessages(['current_password' => trans('Current password not match with our recod.')]);
        }

        User::where('id',Auth::user()->id)->update([
            'password' => Hash::make($request->input('password')),
        ]);
        toast(trans('Password update successfully.'),'success')->width('350');
        return back();
    }


    public function profileUpdate(Request $request){
        $request->validate([
            'photo' => 'image:png,jpeg,jpg',
            'name' => 'required',
            'email' => 'required|email',
        ]);


        $photo = Auth::user()->userProfile->photo;
        if ($request->file('photo')) {
            if ($photo !== 'default/user-default-avator.jpg') {
                unlink(base_path('public/'.$photo));
            }

            $manager = new ImageManager(new Driver);
            $image = $request->file('photo');
            $name = Str::slug($request->input('name')).'-'.Auth::user()->id.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/uploads/avator/'.$name));
            $photo = 'uploads/avator/'.$name;
        }

        User::where('id',Auth::user()->id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        UserProfile::where('userId', Auth::user()->id)->update([
            'phone' => $request->input('phone'),
            'photo' => $photo,
            'city' => $request->input('city'),
            'address' => $request->input('address'),
        ]);
        toast(trans('Profile update successfully.'),'success')->width('350');
        return back();

    }
}
