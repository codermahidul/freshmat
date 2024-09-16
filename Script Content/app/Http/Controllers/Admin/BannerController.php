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

        toast(trans('Home One Left Banner Update Successfully!'),'success');
        return back();


    }

    //Home One Banner Two
    public function homeOneBannerTwoUpdate(Request $request){
        $request->validate([
            'shortTitle2' => 'required|string',
            'offerText2' => 'required|string',
            'link2' => 'required|url:http,https',
            'backgroundImg2' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle2.required' => trans('The short title field is required.'),
            'offerText2.required' => trans('The offer text field is required.'),
            'link2.required' => trans('The link field is required.'),
            'link2.url' => trans('The link field must be a valid URL.'),
            'backgroundImg2.image' => trans('The background img field must be an image.'),
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

        toast(trans('Home One Right Banner Update Successfully!'),'success');
        return back();


    }


        //Home One Banner Two
        public function homeOneBannerSpecialUpdate(Request $request){
            $request->validate([
                'shortTitles' => 'required|string',
                'offerTexts' => 'required|string',
                'links' => 'required|url:http,https',
                'backgroundImgs' => 'image:jpg,jpeg,png',
            ],[
                'shortTitles.required' => trans('The short title field is required.'),
                'offerTexts.required' => trans('The offer text field is required.'),
                'links.required' => trans('The link field is required.'),
                'links.url' => trans('The link field must be a valid URL.'),
                'backgroundImgs.image' => trans('The background img field must be an image.'),
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

            toast(trans('Home One Special Banner Update Successfully!'),'success');
            return back();


        }

     //Product Details Page Banner

     public function pdpagebannerIndex(){
        $productDetailsBanner = Banner::where('id',4)->first();
        return view('dashboard.banner.product-details-page-banner',compact([
            'productDetailsBanner',
        ]));
     }

    public function productDetailsBanner(Request $request){
        $request->validate([
            'shortTitlep' => 'required|string',
            'offerTextp' => 'required|string',
            'linkp' => 'required|url:http,https',
            'backgroundImgp' => 'image:jpg,jpeg,png',
        ],[
            'shortTitlep.required' => trans('The short title field is required.'),
            'offerTextp.required' => trans('The offer text field is required.'),
            'linkp.required' => trans('The link field is required.'),
            'linkp.url' => trans('The link field must be a valid URL.'),
            'backgroundImgp.image' => trans('The background img field must be an image.'),
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

        toast(trans('Product Details Page Banner Update Successfully!'),'success');
        return back();

    }


    //Home Two Banner

    public function homeTwoBanner(){
        $homeTwoMainBanner = Banner::where('id',9)->first();
        $homeTwoLeftBanner = Banner::where('id',5)->first();
        $homeTwoRightTopBanner = Banner::where('id',6)->first();
        $homeTwoRightBottomBanner = Banner::where('id',7)->first();
        $homeTwoSpecialBanner = Banner::where('id',8)->first();
        $homeTwoBSBanner = Banner::where('id',10)->first();
        return view('dashboard.banner.home-two-banner',compact([
            'homeTwoMainBanner',
            'homeTwoLeftBanner',
            'homeTwoRightTopBanner',
            'homeTwoRightBottomBanner',
            'homeTwoSpecialBanner',
            'homeTwoBSBanner',
        ]));
    }


    public function htbmainUpdate(Request $request){
        $request->validate([
            'shortTitle0' => 'required|string',
            'offerText0' => 'required|string',
            'link0' => 'required|url:http,https',
            'backgroundImg0' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle0.required' => trans('The short title field is required.'),
            'offerText0.required' => trans('The offer text field is required.'),
            'link0.required' => trans('The link field is required.'),
            'link0.url' => trans('The link field must be a valid URL.'),
            'backgroundImg0.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',9)->first()->backgroundImg;

        if ($request->file('backgroundImgs0')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs0');
                $name = 'home_two_main_banner'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(1920,710);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',9)->update([
            'shortTitle' => $request->input('shortTitle0'),
            'offerText' => $request->input('offerText0'),
            'link' => $request->input('link0'),
            'description' => $request->input('description0'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two main banner update successfull!'),'success');
        return back();
    }


    public function htboUpdate(Request $request){
        $request->validate([
            'shortTitle1' => 'required|string',
            'offerText1' => 'required|string',
            'link1' => 'required|url:http,https',
            'backgroundImg1' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle1.required' => trans('The short title field is required.'),
            'offerText1.required' => trans('The offer text field is required.'),
            'link1.required' => trans('The link field is required.'),
            'link1.url' => trans('The link field must be a valid URL.'),
            'backgroundImg1.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',5)->first()->backgroundImg;

        if ($request->file('backgroundImgs1')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs1');
                $name = 'home_two_special_pro_banner_img_2'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(563,570);
                $img->toJpeg(90)->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',5)->update([
            'shortTitle' => $request->input('shortTitle1'),
            'offerText' => $request->input('offerText1'),
            'link' => $request->input('link1'),
            'description' => $request->input('description1'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two left banner update successfull!'),'success');
        return back();
    }


    public function htbtUpdate(Request $request){
        $request->validate([
            'shortTitle2' => 'required|string',
            'offerText2' => 'required|string',
            'link2' => 'required|url:http,https',
            'backgroundImg2' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle2.required' => trans('The short title field is required.'),
            'offerText2.required' => trans('The offer text field is required.'),
            'link2.required' => trans('The link field is required.'),
            'link2.url' => trans('The link field must be a valid URL.'),
            'backgroundImg2.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',6)->first()->backgroundImg;

        if ($request->file('backgroundImgs2')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs2');
                $name = 'home_two_regular_banner_one'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(727,270);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',6)->update([
            'shortTitle' => $request->input('shortTitle2'),
            'offerText' => $request->input('offerText2'),
            'link' => $request->input('link2'),
            'description' => $request->input('description2'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two right top banner update successfull!'),'success');
        return back();
    }


    public function htbthUpdate(Request $request){
        $request->validate([
            'shortTitle3' => 'required|string',
            'offerText3' => 'required|string',
            'link3' => 'required|url:http,https',
            'backgroundImg3' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle3.required' => trans('The short title field is required.'),
            'offerText3.required' => trans('The offer text field is required.'),
            'link3.required' => trans('The link field is required.'),
            'link3.url' => trans('The link field must be a valid URL.'),
            'backgroundImg3.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',7)->first()->backgroundImg;

        if ($request->file('backgroundImgs3')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs3');
                $name = 'home_two_regular_banner_two'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(727,270);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',7)->update([
            'shortTitle' => $request->input('shortTitle3'),
            'offerText' => $request->input('offerText3'),
            'link' => $request->input('link3'),
            'description' => $request->input('description3'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two right bottom banner update successfull!'),'success');
        return back();
    }


    public function htbsUpdate(Request $request){
        $request->validate([
            'shortTitle4' => 'required|string',
            'offerText4' => 'required|string',
            'link4' => 'required|url:http,https',
            'backgroundImg3' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle4.required' => trans('The short title field is required.'),
            'offerText4.required' => trans('The offer text field is required.'),
            'link4.required' => trans('The link field is required.'),
            'link4.url' => trans('The link field must be a valid URL.'),
            'backgroundImg4.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',8)->first()->backgroundImg;

        if ($request->file('backgroundImgs4')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs4');
                $name = 'home_two_special_pro_banner_img_3'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(310,425);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',8)->update([
            'shortTitle' => $request->input('shortTitle4'),
            'offerText' => $request->input('offerText4'),
            'link' => $request->input('link4'),
            'description' => $request->input('description4'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two special product banner update successfull!'),'success');
        return back();
    }


    public function htbbsUpdate(Request $request){
        $request->validate([
            'offerText5' => 'required|string',
            'link5' => 'required|url:http,https',
            'backgroundImg5' => 'image:jpg,jpeg,png',
        ],[
            'offerText5.required' => trans('The offer text field is required.'),
            'link5.required' => trans('The link field is required.'),
            'link5.url' => trans('The link field must be a valid URL.'),
            'backgroundImg5.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',10)->first()->backgroundImg;

        if ($request->file('backgroundImgs5')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgs5');
                $name = 'home_two_special_pro_banner_img_4'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(420,540);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',10)->update([
            'offerText' => $request->input('offerText5'),
            'link' => $request->input('link5'),
            'description' => $request->input('description5'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home two Barnd Product banner update successfull!'),'success');
        return back();
    }

    public function homeThreeBanner(){
        $homeThreeRightTopBanner = Banner::where('id',11)->first();
        $homeThreeRightBottomBanner = Banner::where('id',12)->first();
        $hom3LeftBanner = Banner::where('id',13)->first();
        $hom3MiddleBanner = Banner::where('id',14)->first();
        $hom3RightBanner = Banner::where('id',15)->first();
        return view('dashboard.banner.home-three-banner',compact([
            'homeThreeRightTopBanner',
            'homeThreeRightBottomBanner',
            'hom3LeftBanner',
            'hom3MiddleBanner',
            'hom3RightBanner',
        ]));
    }


    public function hthboupdate(Request $request){
        $request->validate([
            'shortTitle' => 'required|string',
            'offerText' => 'required|string',
            'link' => 'required|url:http,https',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        $save_url = Banner::where('id',11)->first()->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImg');
                $name = 'home_three_banner_one'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(420,250);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',11)->update([
            'shortTitle' => $request->input('shortTitle'),
            'offerText' => $request->input('offerText'),
            'link' => $request->input('link'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home three right top banner update successfull!'),'success');
        return back();
    }


    public function hthbtupdate(Request $request){
        $request->validate([
            'shortTitle1' => 'required|string',
            'offerText1' => 'required|string',
            'link1' => 'required|url:http,https',
            'backgroundImg1' => 'image:jpg,jpeg,png',
        ],[
            'shortTitle1.required' => trans('The short title field is required.'),
            'offerText1.required' => trans('The offer text field is required.'),
            'link1.required' => trans('The link field is required.'),
            'link1.url' => trans('The link field must be a valid URL.'),
            'backgroundImg1.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',12)->first()->backgroundImg;

        if ($request->file('backgroundImg1')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImg1');
                $name = 'home_three_banner_two'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(420,250);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',12)->update([
            'shortTitle' => $request->input('shortTitle1'),
            'offerText' => $request->input('offerText1'),
            'link' => $request->input('link1'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home three right bottom banner update successfull!'),'success');
        return back();
    }

    //Left banner
    public function hthblupdate(Request $request){
        $request->validate([
            'offerTextx' => 'required|string',
            'descriptionx' => 'required|string',
            'linkx' => 'required|url:http,https',
            'backgroundImgx' => 'image:jpg,jpeg,png',
        ],[
            'offerTextx.required' => trans('The offer text field is required.'),
            'descriptionx.required' => trans('The description field is required.'),
            'linkx.required' => trans('The link field is required.'),
            'linkx.url' => trans('The link field must be a valid URL.'),
            'backgroundImgx.image' => trans('The background img field must be an image.'),
        ]);

        $save_url = Banner::where('id',13)->first()->backgroundImg;

        if ($request->file('backgroundImgx')) {
            unlink(base_path('public/'.$save_url));
                //Feature Image
                $manager = new ImageManager(new Driver());
                $backgroundImg = $request->file('backgroundImgx');
                $name = 'home_three_discount_one'.'.'.$backgroundImg->getClientOriginalExtension();
                $img = $manager->read($backgroundImg);
                $img = $img->resize(420,256);
                $img->save(base_path('public/uploads/banners/'.$name));
                $save_url = 'uploads/banners/'.$name;
        }


        Banner::where('id',13)->update([
            'description' => $request->input('descriptionx'),
            'offerText' => $request->input('offerTextx'),
            'link' => $request->input('linkx'),
            'backgroundImg' => $save_url,
        ]);

        toast(trans('Home three left banner update successfull!'),'success');
        return back();
    }

        //Left middle
        public function hthbmupdate(Request $request){
            $request->validate([
                'offerTexty' => 'required|string',
                'descriptiony' => 'required|string',
                'linky' => 'required|url:http,https',
                'backgroundImgy' => 'image:jpg,jpeg,png',
            ],[
                'offerTexty.required' => trans('The offer text field is required.'),
                'descriptiony.required' => trans('The description field is required.'),
                'linky.required' => trans('The link field is required.'),
                'linky.url' => trans('The link field must be a valid URL.'),
                'backgroundImgy.image' => trans('The background img field must be an image.'),
            ]);

            $save_url = Banner::where('id',14)->first()->backgroundImg;

            if ($request->file('backgroundImgy')) {
                unlink(base_path('public/'.$save_url));
                    //Feature Image
                    $manager = new ImageManager(new Driver());
                    $backgroundImg = $request->file('backgroundImgy');
                    $name = 'home_three_discount_two'.'.'.$backgroundImg->getClientOriginalExtension();
                    $img = $manager->read($backgroundImg);
                    $img = $img->resize(420,256);
                    $img->save(base_path('public/uploads/banners/'.$name));
                    $save_url = 'uploads/banners/'.$name;
            }


            Banner::where('id',14)->update([
                'description' => $request->input('descriptiony'),
                'offerText' => $request->input('offerTexty'),
                'link' => $request->input('linky'),
                'backgroundImg' => $save_url,
            ]);

            toast(trans('Home three middle banner update successfull!'),'success');
            return back();
        }


        //Left right
        public function hthbrupdate(Request $request){
            $request->validate([
                'offerTextz' => 'required|string',
                'descriptionz' => 'required|string',
                'linkz' => 'required|url:http,https',
                'backgroundImgz' => 'image:jpg,jpeg,png',
            ],[
                'offerTextz.required' => trans('The offer text field is required.'),
                'descriptionz.required' => trans('The description field is required.'),
                'linkz.required' => trans('The link field is required.'),
                'linkz.url' => trans('The link field must be a valid URL.'),
                'backgroundImgz.image' => trans('The background img field must be an image.'),
            ]);

            $save_url = Banner::where('id',15)->first()->backgroundImg;

            if ($request->file('backgroundImgz')) {
                unlink(base_path('public/'.$save_url));
                    //Feature Image
                    $manager = new ImageManager(new Driver());
                    $backgroundImg = $request->file('backgroundImgz');
                    $name = 'home_three_discount_three'.'.'.$backgroundImg->getClientOriginalExtension();
                    $img = $manager->read($backgroundImg);
                    $img = $img->resize(420,256);
                    $img->save(base_path('public/uploads/banners/'.$name));
                    $save_url = 'uploads/banners/'.$name;
            }


            Banner::where('id',15)->update([
                'description' => $request->input('descriptionz'),
                'offerText' => $request->input('offerTextz'),
                'link' => $request->input('linkz'),
                'backgroundImg' => $save_url,
            ]);

            toast(trans('Home three right banner update successfull!'),'success');
            return back();
        }

    //End
}
