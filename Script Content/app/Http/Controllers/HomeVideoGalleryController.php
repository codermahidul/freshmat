<?php

namespace App\Http\Controllers;

use App\Models\HomeVideoGallery;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class HomeVideoGalleryController extends Controller
{
  function index(){
    $hovg = HomeVideoGallery::first();
    return view('dashboard.sections.homevideogallery',compact('hovg'));
  }

  //Home One Video Gallery Update
  function hovgUpdate(Request $request){
    $request->validate([
        'shortTitle' => 'required',
        'offerText' => 'required',
        'link' => 'required|url',
        'video1' => 'required|url',
        'video2' => 'required|url',
        'video3' => 'required|url',
        'video4' => 'required|url',
        'thumbnail1' => 'image:jpg,png,jpeg',
        'thumbnail2' => 'image:jpg,png,jpeg',
        'thumbnail3' => 'image:jpg,png,jpeg',
        'thumbnail4' => 'image:jpg,png,jpeg',
    ]);


    $thumbnail1 = HomeVideoGallery::where('id',1)->first()->thumbnail1;
    $thumbnail2 = HomeVideoGallery::where('id',1)->first()->thumbnail2;
    $thumbnail3 = HomeVideoGallery::where('id',1)->first()->thumbnail3;
    $thumbnail4 = HomeVideoGallery::where('id',1)->first()->thumbnail4;


    //Thumbnail one
    if ($request->file('thumbnail1')) {
        unlink(base_path('public/'.$thumbnail1));

        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('thumbnail1');
        $name = 'video-thumbnail-one'.'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(380,270);// Size 830x480
        $img->toJpeg(90)->save(base_path('public/uploads/assets/'.$name));
        $thumbnail1 = 'uploads/assets/'.$name;
    }

    //Thumbnail two
    if ($request->file('thumbnail2')) {
        unlink(base_path('public/'.$thumbnail2));

        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('thumbnail2');
        $name = 'video-thumbnail-two'.'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(380,270);// Size 830x480
        $img->toJpeg(90)->save(base_path('public/uploads/assets/'.$name));
        $thumbnail2 = 'uploads/assets/'.$name;
    }

    //Thumbnail three
    if ($request->file('thumbnail3')) {
        unlink(base_path('public/'.$thumbnail3));
    
        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('thumbnail3');
        $name = 'video-thumbnail-three'.'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(380,270);// Size 830x480
        $img->toJpeg(90)->save(base_path('public/uploads/assets/'.$name));
        $thumbnail3 = 'uploads/assets/'.$name;
    }

    //Thumbnail four
    if ($request->file('thumbnail4')) {
        unlink(base_path('public/'.$thumbnail4));

        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('thumbnail4');
        $name = 'video-thumbnail-four'.'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(380,270);// Size 830x480
        $img->toJpeg(90)->save(base_path('public/uploads/assets/'.$name));
        $thumbnail4 = 'uploads/assets/'.$name;
    }

    HomeVideoGallery::where('id',1)->update([
        'shortTitle' => $request->input('shortTitle'),
        'offerText' => $request->input('offerText'),
        'description' => $request->input('description'),
        'link' => $request->input('link'),
        'thumbnail1' => $thumbnail1,
        'video1' => $request->input('video1'),
        'thumbnail2' => $thumbnail2,
        'video2' => $request->input('video2'),
        'thumbnail3' => $thumbnail3,
        'video3' => $request->input('video3'),
        'thumbnail4' => $thumbnail4,
        'video4' => $request->input('video4'),
    ]);

    toast('Home One Video Gallery Section Update Successully!','success');
    return back();


  }
}
