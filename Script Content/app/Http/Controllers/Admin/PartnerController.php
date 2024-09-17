<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
        $img->save(base_path('public/uploads/partner/'.$name));
        $logoUrl = 'uploads/partner/'.$name;
    }

    Partner::insert([
        'logo' => $logoUrl,
        'status' => $request->input('status'),
    ]);

    toast(trans('Partner Added Successfully!'),'success');
    return back();

    }

        //Partner edit
        public function edit($id){
            $partner = Partner::where('id',$id)->first();
            return view('dashboard.partner.edit',compact('partner'));
        }


     //Partner update
    public function update(Request $request, $id){
        $request->validate([
            'status' => 'required|string',
            'logo' => 'image:jpg,jpeg,png',
        ]);

        $logo = Partner::where('id',$id)->first()->logo;

        if ($request->file('logo')) {
            unlink(base_path('public/'.$logo));

            $manager = new ImageManager(new Driver());
            $logo = $request->file('logo');
            $name = Str::uuid()->toString().'.'.$logo->getClientOriginalExtension();
            $img = $manager->read($logo);
            $img = $img->resize(100,100);
            $img->toJpeg(100)->save(base_path('public/uploads/partner/'.$name));
            $logo = 'uploads/partner/'.$name;
        }

        Partner::where('id',$id)->update([
            'status' => $request->input('status'),
             'logo' => $logo,
             ]);


        toast(trans('Partner Update Successfully!'),'success');
        return back();

    }



    //Partner delete
    public function delete($id){
        $partner = Partner::where('id',$id)->first();
        unlink(base_path('public/'.$partner->logo));
        $partner->delete();
        toast(trans('Parner Deleted Successfully!'),'success');
        return back();
    }




}
