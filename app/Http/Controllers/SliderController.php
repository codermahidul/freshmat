<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->paginate(10);
        return view('dashboard.slider.index',compact('sliders'));
    }


    //insert slider
    public function insert(Request $request){
        $request->validate([
            'shortTitle' => 'required|string',
            'offerText' => 'required|string',
            'link' => 'required|url:http,https',
            'backgroundImg' => 'required|image:jpg,jpeg,png',
        ]);

        if ($request->file('backgroundImg')) {
            $manager = new ImageManager(new Driver());
            $backgroundImg = $request->file('backgroundImg');
            $name = Str::uuid()->toString().'.'.$backgroundImg->getClientOriginalExtension();
            $img = $manager->read($backgroundImg);
            $img = $img->resize(965,480);
            $img->toJpeg(100)->save(base_path('public/uploads/slider/'.$name));
            $sliderBg = 'uploads/slider/'.$name;
        }

        Slider::insert([
            'shortTitle' => $request->input('shortTitle'),
            'offerText' => $request->input('offerText'),
            'description' => $request->input('description'),
            'link' => $request->input('link'),
            'backgroundImg' => $sliderBg,
        ]);

        return back()->with('success','Slider Item Added Successfully!');
    }

    //slider edit
    public function edit($id){
        $slider = Slider::where('id',$id)->first();
        return view('dashboard.slider.edit',compact('slider'));
    }

    //slider update
    public function update(Request $request, $id){
        $request->validate([
            'shortTitle' => 'required|string',
            'offerText' => 'required|string',
            'link' => 'required|url:http,https',
            'backgroundImg' => 'image:jpg,jpeg,png',
        ]);

        $sliderBg = Slider::where('id',$id)->first()->backgroundImg;

        if ($request->file('backgroundImg')) {
            unlink(base_path('public/'.$sliderBg));

            $manager = new ImageManager(new Driver());
            $backgroundImg = $request->file('backgroundImg');
            $name = Str::uuid()->toString().'.'.$backgroundImg->getClientOriginalExtension();
            $img = $manager->read($backgroundImg);
            $img = $img->resize(965,480);
            $img->toJpeg(100)->save(base_path('public/uploads/slider/'.$name));
            $sliderBg = 'uploads/slider/'.$name;
        }

        Slider::where('id',$id)->update([
            'shortTitle' => $request->input('shortTitle'),
             'offerText' => $request->input('offerText'),
             'description' => $request->input('description'),
             'link' => $request->input('link'),
             'status' => $request->input('status'),
             'backgroundImg' => $sliderBg,
             ]);


        return back()->with('success','Silder Item Update Successfully!');

    }

    //Slider delete
    public function delete($id){
        $slider = Slider::where('id',$id)->first();
        unlink(base_path('public/'.$slider->backgroundImg));
        $slider->delete();
        return back()->with('success','Slider Item Deleted Successfully');
    }


}
