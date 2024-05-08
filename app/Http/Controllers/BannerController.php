<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class BannerController extends Controller
{
    public function homeOneBanner(){
        $homeOneBannerOne = Banner::where('id',1)->first();
        $homeOneBannerTwo = Banner::where('id',2)->first();
        $homeOneBannerSpecial = Banner::where('id',3)->first();
        return view('dashboard.banner.home-one-banner',compact(
            'homeOneBannerOne',
            'homeOneBannerTwo',
            'homeOneBannerSpecial',
        ));
    }


    public function homeOneBannerUpdate(Request $request){
        $request->validate([
            'shortTitle' => 'required|string',
            'offerText' => 'required|string',
            'link' => 'required|url:http,https',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        $save_url = Banner::where('id',1)->first()->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImg');
                $name = 'home-one-banner-one'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(645,300);
                $img->toJpeg(90)->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',1)->update([
            'shortTitle' => $request->input('shortTitle'),
            'offerText' => $request->input('offerText'),
            'link' => $request->input('link'),
            'backgroundImg' => $save_url,
        ]);

        return back()->with('success', 'Home One Left Banner Update Successfully!');


    }






    //End
}
