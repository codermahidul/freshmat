<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index(){
        return view('dashboard.setting.index');
    }

    // Logo Favicon Update
    public function logoFavicon(Request $request){

        $logo = $request->file('logo');
        $footerLogo = $request->file('footerlogo');
        $favicon = $request->file('favicon');

        if ($logo) {
            //Feature Image
            $manager = new ImageManager(new Driver());
            $logo = $request->file('logo');
            $name = 'logo'.'.'.$logo->getClientOriginalExtension();
            $img = $manager->read($logo);
            $img = $img->resize(160,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $save_url = 'uploads/assets/'.$name;
            Setting::where('id',1)->update([
                'logo' => $save_url,
            ]);
        }

        if ($footerLogo) {
            //Feature Image
            $manager = new ImageManager(new Driver());
            $logo = $request->file('footerlogo');
            $name = 'footer-logo'.'.'.$logo->getClientOriginalExtension();
            $img = $manager->read($logo);
            $img = $img->resize(160,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $save_url = 'uploads/assets/'.$name;
            Setting::where('id',1)->update([
                'footerLogo' => $save_url,
            ]);
        }

        if ($favicon) {
            //Feature Image
            $manager = new ImageManager(new Driver());
            $favicon = $request->file('favicon');
            $name = 'favicon'.'.'.$favicon->getClientOriginalExtension();
            $img = $manager->read($favicon);
            $img = $img->resize(70,70);
            $img->save(base_path('public/uploads/assets/'.$name));
            $save_url = 'uploads/assets/'.$name;
            Setting::where('id',1)->update([
                'favicon' => $save_url,
            ]);
        }

        return back()->with('success', 'Update Successfully!');
    }

    //General Settings

    public function general(Request $request){
        Setting::where('id',1)->update([
            'topbar' => $request->input('topbar'),
        ]);

        return back()->with('success', 'General Settings Update Successfully!');
    }


    //Contact Message Setting Update

    public function contactMessageSetingUpdate(Request $request){
        $request->validate([
            'email' => 'nullable|email',
            'dbsave' => 'required'
        ]);

        Setting::where('id',1)->update([
            'messageReceiveEmail' => $request->input('email'),
            'messageSaveOnDB' => $request->input('dbsave'),
        ]);

        return back()->with('success', 'Setting Change Successfully!');


    }


}
