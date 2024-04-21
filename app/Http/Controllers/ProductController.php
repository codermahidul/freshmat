<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    //Product Category
    public function index(){
        $productcategory = ProductCategory::latest()->paginate(10);
        return view('dashboard.product.category.index', compact('productcategory'));
    }

    public function add(){
        return view('dashboard.product.category.add');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'icon' => 'required|image:png',
        ]);

        //Slug
        $slug = "";
        if ($request->input('slug') == '') {
            $slug = Str::slug($request->input('name','-'));
         }else {
             $slug = Str::slug($request->input('slug'),'-');
         }


        //Icon Process

        $manager = new ImageManager(new Driver());
        $icon = $request->file('icon');
        $name = $slug.'-'.Str::uuid()->toString().'.'.$icon->getClientOriginalExtension();
        $img = $manager->read($icon);
        $img = $img->resize(70,70);
        $img->toPng(80)->save(base_path('public/uploads/category-icon/'.$name));
        $save_url = 'uploads/category-icon/'.$name;


        ProductCategory::insert([
            'name' => $request->input('name'),
            'slug' => $slug,
            'icon' => $save_url,
        ]);

        return back()->with('success','Product Category Added Succesfully!');


    }
}
