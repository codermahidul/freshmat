<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    //About Us page
    public function aboutUs(){
        $contents = AboutUs::find(1);
        return view('dashboard.pages.aboutUs.index',compact('contents'));
    }

    public function aboutUsUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'shortTitle' => 'required',
            'description' => 'required',
            'quote' => 'required',
            'listItemOne' => 'required',
            'listItemTwo' => 'required',
            'listItemThree' => 'required',
            'listItemFour' => 'required',
            'f1title' => 'required',
            'f1description' => 'required',
            'f2title' => 'required',
            'f2description' => 'required',
            'f3title' => 'required',
            'f3description' => 'required',
            'w1title' => 'required',
            'w1description' => 'required',
            'w2title' => 'required',
            'w2description' => 'required',
            'w3title' => 'required',
            'w3description' => 'required',
            'w4title' => 'required',
            'w4description' => 'required',
            'c1number' => 'required|integer',
            'c1text' => 'required',
            'c2number' => 'required|integer',
            'c2text' => 'required',
            'c3number' => 'required|integer',
            'c3text' => 'required',
            'c4number' => 'required',
            'c4text' => 'required',
            //Image
            'image' => 'image:jpeg,jpg,png',
            'f1icon' => 'image:jpeg,jpg,png',
            'f2icon' => 'image:jpeg,jpg,png',
            'f3icon' => 'image:jpeg,jpg,png',
            'c1icon' => 'image:jpeg,jpg,png',
            'c2icon' => 'image:jpeg,jpg,png',
            'c3icon' => 'image:jpeg,jpg,png',
            'c4icon' => 'image:jpeg,jpg,png',
        ]);

        //Image Processing
        $image = AboutUs::find(1)->image;

        if ($request->file('image')) {
            unlink(base_path('public/'.$image));

            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $name = 'about_img'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(475,475);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $image = 'default/aboutUs/'.$name;
        }

        //Image Processing
        $f1icon = AboutUs::find(1)->f1icon;

        if ($request->file('f1icon')) {
            unlink(base_path('public/'.$f1icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('f1icon');
            $name = 'why_choose_icon_1'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $f1icon = 'default/aboutUs/'.$name;
        }

        //Image Processing
        $f2icon = AboutUs::find(1)->f2icon;

        if ($request->file('f2icon')) {
            unlink(base_path('public/'.$f2icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('f2icon');
            $name = 'why_choose_icon_2'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $f2icon = 'default/aboutUs/'.$name;
        }

         //Image Processing
        $f3icon = AboutUs::find(1)->f3icon;

        if ($request->file('f3icon')) {
            unlink(base_path('public/'.$f3icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('f3icon');
            $name = 'why_choose_icon_3'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $f3icon = 'default/aboutUs/'.$name;
        }


        //Image Processing
        $c1icon = AboutUs::find(1)->c1icon;

        if ($request->file('c1icon')) {
            unlink(base_path('public/'.$c1icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('c1icon');
            $name = 'counter_icon_1'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $c1icon = 'default/aboutUs/'.$name;
        }        
        
        //Image Processing
        $c2icon = AboutUs::find(1)->c2icon;

        if ($request->file('c2icon')) {
            unlink(base_path('public/'.$c2icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('c2icon');
            $name = 'counter_icon_2'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $c2icon = 'default/aboutUs/'.$name;
        }  

        //Image Processing
        $c3icon = AboutUs::find(1)->c3icon;

        if ($request->file('c3icon')) {
            unlink(base_path('public/'.$c3icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('c3icon');
            $name = 'counter_icon_3'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $c3icon = 'default/aboutUs/'.$name;
        }

        //Image Processing
        $c4icon = AboutUs::find(1)->c4icon;

        if ($request->file('c4icon')) {
            unlink(base_path('public/'.$c4icon));
        
            $manager = new ImageManager(new Driver());
            $image = $request->file('c4icon');
            $name = 'counter_icon_4'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->save(base_path('public/default/aboutUs/'.$name));
            $c4icon = 'default/aboutUs/'.$name;
        }


        AboutUs::where('id',1)->update([
            'title' => $request->input('title'),
            'shortTitle' => $request->input('shortTitle'),
            'description' => $request->input('description'),
            'quote' => $request->input('quote'),
            'listItemOne' => $request->input('listItemOne'),
            'listItemTwo' => $request->input('listItemTwo'),
            'listItemThree' => $request->input('listItemThree'),
            'listItemFour' => $request->input('listItemFour'),
            'f1title' => $request->input('f1title'),
            'f1description' => $request->input('f1description'),
            'f2title' => $request->input('f2title'),
            'f2description' => $request->input('f2description'),
            'f3title' => $request->input('f3title'),
            'f3description' => $request->input('f3description'),
            'w1title' => $request->input('w1title'),
            'w1description' =>$request->input('w1description') ,
            'w2title' => $request->input('w2title'),
            'w2description' => $request->input('w2description'),
            'w3title' => $request->input('w3title'),
            'w3description' => $request->input('w3description'),
            'w4title' => $request->input('w4title'),
            'w4description' => $request->input('w4description'),
            'c1number' => $request->input('c1number'),
            'c1text' => $request->input('c1text'),
            'c2number' => $request->input('c2number'),
            'c2text' => $request->input('c2text'),
            'c3number' => $request->input('c3number'),
            'c3text' => $request->input('c3text'),
            'c4number' => $request->input('c4number'),
            'c4text' => $request->input('c4text'),
            //Image
            'image' => $image,
            'f1icon' => $f1icon,
            'f2icon' => $f2icon,
            'f3icon' => $f3icon,
            'c1icon' => $c1icon,
            'c2icon' => $c2icon,
            'c3icon' => $c3icon,
            'c4icon' => $c4icon,
        ]);
        
        return back()->with('success','Page Update Successfull!');
    }





}
