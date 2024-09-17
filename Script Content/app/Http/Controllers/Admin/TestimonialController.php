<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::latest()->paginate(10);
        return view('dashboard.testimonial.index',compact('testimonials'));
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'quote' => 'required',
            'rating' => 'required|decimal:1|min:1|max:5',
            'image' => 'required|image:jpg,jpeg,png',
            'status' => 'required',
        ]);

        //Image Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('image');
        $name = Str::uuid()->toString().'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(70,70);
        $img->toJpeg(100)->save(base_path('public/uploads/testimonial/'.$name));
        $imageUrl = 'uploads/testimonial/'.$name;

        Testimonial::insert([
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'quote' => $request->input('quote'),
            'rating' => $request->input('rating'),
            'photo' => $imageUrl,
            'status' => $request->input('status'),
        ]);

        toast(trans('Successfully your testimonial added!'),'success');
        return back();
    }

    public function edit($id){
        $testimonial = Testimonial::find($id);
        return view('dashboard.testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'quote' => 'required',
            'rating' => 'required|decimal:1|min:1|max:5',
            'status' => 'required',
        ]);

        $photo = Testimonial::find($id)->photo;

        if ($request->file('image')) {
            unlink(base_path('public/'.$photo));

            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $name = Str::uuid()->toString().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(70,70);
            $img->toJpeg(100)->save(base_path('public/uploads/testimonial/'.$name));
            $photo = 'uploads/testimonial/'.$name;
        }

        Testimonial::where('id',$id)->update([
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'quote' => $request->input('quote'),
            'rating' => $request->input('rating'),
            'photo' => $photo,
            'status' => $request->input('status'),
        ]);

        toast(trans('Testimonial Update Successfull!'),'success');
        return redirect()->route('testimonial');

    }

    public function delete($id){
        Testimonial::find($id)->delete();
        toast(trans('Testimonial Deleted Successfull!'),'success');
        return back();
    }



}
