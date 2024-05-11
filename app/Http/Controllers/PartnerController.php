<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    function index(){
        $partners = Partner::latest()->paginate(10);
        return view('dashboard.partner.index',compact('partners'));
    }

    //Partner Insert
    function insert(Request $request){
        $request->validate([
            'logo' => 'required|image:jpg,png,jpeg',
        ]);

    //logo
    if ($request->file('logo')) {

        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('logo');
        $name = Str::uuid().'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(100,100);// Size 830x480
        $img->toJpeg(90)->save(base_path('public/uploads/partner/'.$name));
        $logoUrl = 'uploads/partner/'.$name;
    }

    Partner::insert([
        'logo' => $logoUrl,
        'status' => $request->input('status'),
    ]);

    return back()->with('success', 'Partner Added Successfully!');

    }
}
