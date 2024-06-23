<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class PolicyController extends Controller
{
    public function index(){
        return view('dashboard.policy.index');
    }

    public function update(Request $request){
        $request->validate([
            '*' => 'required',
            'icon1' => 'image:jpg,jpeg,png',
            'icon2' => 'image:png,jpeg,jpg',
            'icon3' => 'image:png,jpeg,jpg',
        ],[
            'icon1.image' => 'The icon field must be an image.',
            'icon2.image' => 'The icon field must be an image.',
            'icon3.image' => 'The icon field must be an image.',
            'heading1.required' => 'The heading field is required.',
            'heading2.required' => 'The heading field is required.',
            'heading3.required' => 'The heading field is required.',
            'subheading1.required' => 'The subheading field is required.',
            'subheading2.required' => 'The subheading field is required.',
            'subheading3.required' => 'The subheading field is required.',
        ]);


         $icon1 = htPolicy(1)->icon;
         $icon2 = htPolicy(2)->icon;
         $icon3 = htPolicy(3)->icon;

         //Icon 1
        if ($request->file('icon1')) {
            unlink(base_path('public/'.$icon1));

            $manager = new ImageManager(new Driver);
            $icon = $request->file('icon1');
            $name = 'policy-icon-1'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(60,60);
            $img->save(base_path('public/uploads/assets/policy/'.$name));
            $icon1 = 'uploads/assets/policy/'.$name;
        }

        //Icon2
        if ($request->file('icon2')) {
            unlink(base_path('public/'.$icon2));

            $manager = new ImageManager(new Driver);
            $icon = $request->file('icon2');
            $name = 'policy-icon-2'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(60,60);
            $img->save(base_path('public/uploads/assets/policy/'.$name));
            $icon2 = 'uploads/assets/policy/'.$name;
        }

        //Icon 3 
        if ($request->file('icon3')) {
            unlink(base_path('public/'.$icon3));

            $manager = new ImageManager(new Driver);
            $icon = $request->file('icon3');
            $name = 'policy-icon-3'.'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(60,60);
            $img->save(base_path('public/uploads/assets/policy/'.$name));
            $icon3 = 'uploads/assets/policy/'.$name;
        }

        Policy::where('id',1)->update([
            'icon' => $icon1,
            'heading' => $request->input('heading1'),
            'subheading' => $request->input('subheading1'),
        ]);

        Policy::where('id',2)->update([
            'icon' => $icon2,
            'heading' => $request->input('heading2'),
            'subheading' => $request->input('subheading2'),
        ]);

        Policy::where('id',3)->update([
            'icon' => $icon3,
            'heading' => $request->input('heading3'),
            'subheading' => $request->input('subheading3'),
        ]);

        toast('Policy Section Updated Successfull!','success');
        return back();


    }


}
