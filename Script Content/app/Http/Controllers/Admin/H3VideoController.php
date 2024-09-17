<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\H3Video;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class H3VideoController extends Controller
{
    public function index(){
        $h3bVideo = H3Video::find(1)->first();
        return view('dashboard.sections.h3bVideo',compact([
            'h3bVideo',
        ]));
    }

    public function update(Request $request){
        $request->validate([
            '*' => 'required',
            'backgroundImg' => 'image:jpeg,jpg,png',
            'link' => 'required|url',
            'video' => 'required|url',
        ]);

        $bgimage = H3Video::find(1)->first()->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$bgimage));

            $manager = new ImageManager(new Driver);
            $image = $request->file('backgroundImg');
            $name = 'home_three_video_bg'.'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1920,420);
            $img->save(base_path('public/uploads/assets/'.$name));
            $bgimage = 'uploads/assets/'.$name;
        }

        H3Video::where('id',1)->update([
            'heading' => $request->input('heading'),
            'description' => $request->input('description'),
            'link' => $request->input('link'),
            'video' => $request->input('video'),
            'backgroundImg' => $bgimage,
        ]);

        toast(trans('Home 3 Video Section Content Update Successfull!'),'success');
        return back();

    }


}
