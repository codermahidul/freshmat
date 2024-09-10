<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class FooterController extends Controller
{
    public function index(){
        return view('dashboard.themeoption.footer');
    }


    public function footerUpdate(Request $request){
        $request->validate([
            'shortInfo' => 'required',
            'email' => 'required|email',
            'copyright' => 'required',
            'paymentGetwayImage' => 'image:jpg,jpeg,png',
        ]);


        $paymentGetwayImage = footer()->paymentGetwayImage;

        if ($request->file('paymentGetwayImage')) {
            unlink(base_path('public/'.$paymentGetwayImage));

            $manager = new ImageManager(new Driver);
            $image = $request->file('paymentGetwayImage');
            $name = 'payment_getway_image'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(base_path('public/uploads/assets/'.$name));
            $paymentGetwayImage = 'uploads/assets/'.$name;
        }

        Footer::find(1)->update([
            'shortInfo' => $request->input('shortInfo'),
            'email' => $request->input('email'),
            'copyrightText' => $request->input('copyright'),
            'paymentGetwayImage' => $paymentGetwayImage,
        ]);

        toast('Footer content update successfully!','success');
        return back();


    }



}
