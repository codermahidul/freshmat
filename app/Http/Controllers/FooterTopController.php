<?php

namespace App\Http\Controllers;

use App\Models\FooterTop;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class FooterTopController extends Controller
{
    public function index(){
        return view('dashboard.themeoption.footerTop');
    }


    public function footerTopUdate(Request $request){
        $request->validate([
            'icon1' => 'image:jpeg,jpg,png',
            'heading1' => 'required',
            'subheading1' => 'required',            
            
            'icon2' => 'image:jpeg,jpg,png',
            'heading2' => 'required',
            'subheading2' => 'required', 

            'icon3' => 'image:jpeg,jpg,png',
            'heading3' => 'required',
            'subheading3' => 'required',            
            
            'icon4' => 'image:jpeg,jpg,png',
            'heading4' => 'required',
            'subheading4' => 'required',
        ],[
            'icon1.image' => 'The icon field must be an image.',
            'heading1.required' => 'The heading field is required.',
            'subheading1.required' => 'The subheading field is required.',            
            
            'icon2.image' => 'The icon field must be an image.',
            'heading2.required' => 'The heading field is required.',
            'subheading2.required' => 'The subheading field is required.', 

            'icon3.image' => 'The icon field must be an image.',
            'heading3.required' => 'The heading field is required.',
            'subheading3.required' => 'The subheading field is required.',            
            
            'icon4.image' => 'The icon field must be an image.',
            'heading4.required' => 'The heading field is required.',
            'subheading4.required' => 'The subheading field is required.',
        ]);

        $icon1 = footerTop(1)->icon;
        $icon2 = footerTop(2)->icon;
        $icon3 = footerTop(3)->icon;
        $icon4 = footerTop(4)->icon;

        if ($request->file('icon1')) {
            unlink(base_path('public/'.$icon1));

            $manager = new ImageManager(new Driver());
            $icon = $request->file('icon1');
            $name = 'footer_info_icon_1'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(50,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $icon1 = 'uploads/assets/'.$name;
        }

        if ($request->file('icon2')) {
            unlink(base_path('public/'.$icon2));

            $manager = new ImageManager(new Driver());
            $icon = $request->file('icon2');
            $name = 'footer_info_icon_2'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(50,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $icon2 = 'uploads/assets/'.$name;
        }


        if ($request->file('icon3')) {
            unlink(base_path('public/'.$icon3));

            $manager = new ImageManager(new Driver());
            $icon = $request->file('icon3');
            $name = 'footer_info_icon_3'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(50,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $icon3 = 'uploads/assets/'.$name;
        }

        if ($request->file('icon4')) {
            unlink(base_path('public/'.$icon4));

            $manager = new ImageManager(new Driver());
            $icon = $request->file('icon4');
            $name = 'footer_info_icon_4'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(50,50);
            $img->save(base_path('public/uploads/assets/'.$name));
            $icon4 = 'uploads/assets/'.$name;
        }


        FooterTop::find(1)->update([
            'icon' => $icon1,
            'heading' => $request->input('heading1'),
            'subheading' => $request->input('subheading1'),
        ]);        
        
        FooterTop::find(2)->update([
            'icon' => $icon2,
            'heading' => $request->input('heading2'),
            'subheading' => $request->input('subheading2'),
        ]);   

        FooterTop::find(3)->update([
            'icon' => $icon3,
            'heading' => $request->input('heading3'),
            'subheading' => $request->input('subheading3'),
        ]);

        FooterTop::find(4)->update([
            'icon' => $icon4,
            'heading' => $request->input('heading4'),
            'subheading' => $request->input('subheading4'),
        ]);

        return back()->with('success','Footer top content update successfully!');


    }



}
