<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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

        toast(trans('Update Successfully!'),'success');
        return back();
    }

    //General Settings

    public function general(Request $request){
        Setting::where('id',1)->update([
            'theme' => $request->input('theme'),
            'topbar' => $request->input('topbar'),
        ]);

        toast(trans('General Settings Update Successfully!'),'success');
        return back();
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
        toast(trans('Setting Change Successfully!'),'success');
        return back();
    }


    public function googleAnalytic(Request $request){
        Setting::find(1)->update([
            'glanalyticStatus' => $request->input('glanalyticStatus'),
            'analiticTrackingId' => $request->input('analiticTrackingId'),
        ]);
        toast(trans('Google Analytic Setting Update!'),'success');
        return back();
    }


    public function googleRecaptcha(Request $request){
        Setting::find(1)->update([
            'glrecaptchaStatus' => $request->input('glrecaptchaStatus'),
            'captchaSiteKey' => $request->input('captchaSiteKey'),
            'captchaSecretKey' => $request->input('captchaSecretKey'),
        ]);

        toast(trans('Google Recptcha Setting Update!'),'success');
        return back();
    }

    public function socialLogin(Request $request){
        Setting::find(1)->update([
            'flstatus' => $request->input('flstatus'),
            'fbAppId' => $request->input('fbAppId'),
            'fbSecretKey' => $request->input('fbSecretKey'),
            'fbRedirectUrl' => $request->input('fbRedirectUrl'),
            'glstatus' => $request->input('glstatus'),
            'glClientId' => $request->input('glClientId'),
            'glSecretKey' => $request->input('glSecretKey'),
            'glRedirectUrl' => $request->input('glRedirectUrl'),
        ]);

        toast(trans('Social Login Setting Update'),'success');
        return back();
    }


    public function facebookPixel(Request $request){
        Setting::find(1)->update([
            'fbPixelStatus' => $request->input('fbPixelStatus'),
            'fbAppIdPixel' => $request->input('fbAppIdPixel'),
        ]);

        toast(trans('Facebook Pixel Setting Update!'),'success');
        return back();
    }


}
