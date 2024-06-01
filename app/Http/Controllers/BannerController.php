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
        $productDetailsBanner = Banner::where('id',4)->first();
        return view('dashboard.banner.home-one-banner',compact(
            'homeOneBannerOne',
            'homeOneBannerTwo',
            'homeOneBannerSpecial',
            'productDetailsBanner',
        ));
    }


    //Home One Banner One
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

    //Home One Banner Two
    public function homeOneBannerTwoUpdate(Request $request){
        $request->validate([
            'shortTitle2' => 'required|string',
            'offerText2' => 'required|string',
            'link2' => 'required|url:http,https',
            'backgroundImg2' => 'image:jpg,jpeg,png',
        ]);

        $save_url = Banner::where('id',2)->first()->backgroundImg;

        if ($request->file('backgroundImg2')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImg2');
                $name = 'home-one-banner-two'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(645,300);
                $img->toJpeg(90)->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',2)->update([
            'shortTitle' => $request->input('shortTitle2'),
            'offerText' => $request->input('offerText2'),
            'link' => $request->input('link2'),
            'backgroundImg' => $save_url,
        ]);

        return back()->with('success', 'Home One Right Banner Update Successfully!');


    }


        //Home One Banner Two
        public function homeOneBannerSpecialUpdate(Request $request){
            $request->validate([
                'shortTitles' => 'required|string',
                'offerTexts' => 'required|string',
                'links' => 'required|url:http,https',
                'backgroundImgs' => 'image:jpg,jpeg,png',
            ]);
    
            $save_url = Banner::where('id',3)->first()->backgroundImg;
    
            if ($request->file('backgroundImgs')) {
                unlink(base_path('public/'.$save_url));
                    //Feature Image
                    $manager = new ImageManager(new Driver());
                    $backgroundImg = $request->file('backgroundImgs');
                    $name = 'home-one-special_pro_banner_img'.'.'.$backgroundImg->getClientOriginalExtension();
                    $img = $manager->read($backgroundImg);
                    $img = $img->resize(420,540);
                    $img->toJpeg(90)->save(base_path('public/uploads/banners/'.$name));
                    $save_url = 'uploads/banners/'.$name;
            }
    
    
            Banner::where('id',3)->update([
                'shortTitle' => $request->input('shortTitles'),
                'offerText' => $request->input('offerTexts'),
                'link' => $request->input('links'),
                'description' => $request->input('descriptions'),
                'backgroundImg' => $save_url,
            ]);
    
            return back()->with('success', 'Home One Special Banner Update Successfully!');
    
    
        }



            //Home One Banner One
    public function productDetailsBanner(Request $request){
        $request->validate([
            'shortTitlep' => 'required|string',
            'offerTextp' => 'required|string',
            'linkp' => 'required|url:http,https',
            'backgroundImgp' => 'image:jpg,jpeg,png',
        ]);

        $save_url = Banner::where('id',4)->first()->backgroundImg;

        if ($request->file('backgroundImgp')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgp');
                $name = 'product-details-banner'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(420,520);
                $img->toJpeg(90)->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',4)->update([
            'shortTitle' => $request->input('shortTitlep'),
            'offerText' => $request->input('offerTextp'),
            'link' => $request->input('linkp'),
            'backgroundImg' => $save_url,
        ]);

        return back()->with('success', 'Product Details Page Banner Update Successfully!');


    }





    //End
}
