<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\InstagramPost;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class InstagramPostController extends Controller
{
    public function index(){
        $instagramPosts = InstagramPost::latest()->get();
        return view('dashboard.instagramPost.index',compact(['instagramPosts']));
    }

    public function insert(Request $request){
        $request->validate([
            'image' => 'required|image:jpeg,jpg,png',
            'link' => 'nullable|url'
        ]);

        //Image Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('image');
        $name = 'instagram-post-'.Str::uuid().'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(300,300);
        $img->save(base_path('public/uploads/instagramPost/'.$name));
        $url = 'uploads/instagramPost/'.$name;


        InstagramPost::insert([
            'image' => $url,
            'link' => $request->input('link'),
        ]);

        toast(trans('Instagram Post Image Added Successfull!'),'success');
        return back();

    }

    public function delete($id){
        InstagramPost::find($id)->delete();
        toast(trans('Instagram Post Image Delete Successfull!'), 'success');
        return back();
    }

}
