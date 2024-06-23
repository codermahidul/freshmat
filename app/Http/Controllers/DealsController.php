<?php

namespace App\Http\Controllers;

use App\Models\Deals;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class DealsController extends Controller
{
    public function homeOneDeals(){
        return view('dashboard.deals.home-one');
    } 
    
    public function homeOneDealsUpdate(Request $request){
        $request->validate([
            'shortTitle' => 'required',
            'offerText' => 'required',
            'description' => 'required',
            'date' => 'required|date|after:today',
            'link' => 'required|url',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        //Image Process

        $save_url = deals(1)->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$save_url));

            $manager = new ImageManager(new Driver());
            $image = $request->file('backgroundImg');
            $name = 'home_one_deals_bg'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1920,726);
            $img->save(base_path('public/uploads/deals/'.$name));
            $save_url = 'uploads/deals/'.$name;
        }

        Deals::find(1)->update([
            'shortTitle' => $request->input('shortTitle'),
            'offerText' => $request->input('offerText'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'link' => $request->input('link'),
            'backgroundImg' => $save_url,
        ]);

        toast('Deals Update Successfull!','success');
        return back();

    }
    
    public function homeTwoDeals(){
        return view('dashboard.deals.home-two');
    }    

    public function homeTwoDealsUpdate(Request $request){
        $request->validate([
            'shortTitle' => 'required',
            'offerText' => 'required',
            'description' => 'required',
            'date' => 'required|date|after:today',
            'link' => 'required|url',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        //Image Process

        $save_url = deals(2)->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$save_url));

            $manager = new ImageManager(new Driver());
            $image = $request->file('backgroundImg');
            $name = 'home_two_deals_bg'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(532,460);
            $img->save(base_path('public/uploads/deals/'.$name));
            $save_url = 'uploads/deals/'.$name;
        }

        Deals::find(2)->update([
            'shortTitle' => $request->input('shortTitle'),
            'offerText' => $request->input('offerText'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'link' => $request->input('link'),
            'backgroundImg' => $save_url,
        ]);

        toast('Deals Update Successfull!','success');
        return back();

    }
    
    public function homeThreeDeals(){
        return view('dashboard.deals.home-three');
    }

    public function homeThreeDealsUpdate(Request $request){
        $request->validate([
            'offerText' => 'required',
            'description' => 'required',
            'date' => 'required|date|after:today',
            'link' => 'required|url',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        //Image Process

        $save_url = deals(3)->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$save_url));

            $manager = new ImageManager(new Driver());
            $image = $request->file('backgroundImg');
            $name = 'home_three_deals_bg'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1920,700);
            $img->save(base_path('public/uploads/deals/'.$name));
            $save_url = 'uploads/deals/'.$name;
        }

        Deals::find(3)->update([
            'offerText' => $request->input('offerText'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'link' => $request->input('link'),
            'backgroundImg' => $save_url,
        ]);

        toast('Deals Update Successfull!','success');
        return back();

    }


}
