<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\App;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class AppController extends Controller
{
    public function index(){
        return view('dashboard.sections.appsLinks');
    }


    public function update(Request $request){
        $request->validate([
            'shortTitle' => 'required',
            'offerText' => 'required',
            'description' => 'required',
            'playLink' => 'required|url',
            'appleLink' => 'required|url',
            'image' => 'image:jpg,png,jpeg',
            'image2' => 'image:jpg,png,jpeg',
        ]);

        $image = appSection()->image;
        $image2 = appSection()->image2;

        //Image
        if ($request->file('image')) {
        unlink(base_path('public/'.$image));

        //Image Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('image');
        $name = 'app_image'.'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(535,505);// Size 535x505
        $img->save(base_path('public/uploads/assets/'.$name));
        $image = 'uploads/assets/'.$name;
         }

                 //Image
        if ($request->file('image2')) {
            unlink(base_path('public/'.$image2));

            //Image Process
            $manager = new ImageManager(new Driver());
            $image2 = $request->file('image2');
            $name = 'app_image2'.'.'.$image2->getClientOriginalExtension();
            $img = $manager->read($image2);
            $img = $img->resize(430,550);
            $img->save(base_path('public/uploads/assets/'.$name));
            $image2 = 'uploads/assets/'.$name;
        }


         App::where('id',1)->update([
        'shortTitle' => $request->input('shortTitle'),
        'offerText' => $request->input('offerText'),
        'description' => $request->input('description'),
        'playLink' => $request->input('playLink'),
        'appleLink' => $request->input('appleLink'),
        'image' => $image,
        'image2' => $image2,
         ]);

         toast(trans('App Section Content Update Successfully!'), 'success')->width('350');
        return back();


    }




}
