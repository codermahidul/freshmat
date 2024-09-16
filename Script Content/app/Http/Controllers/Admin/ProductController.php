<?php

namespace App\Http\Controllers;

use App\Models\InvoicesProducts;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    //Product Category
    public function index(){
        $productcategory = ProductCategory::latest()->get();
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
            'status' => $request->input('status'),
            'icon' => $save_url,
        ]);
        toast(trans('Product Category Added Succesfully!'),'success')->width('350');
        return back();

    }


    public function edit($id){
         $category = ProductCategory::where('id',$id)->first();
         return view('dashboard.product.category.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'icon' => 'image',
        ]);

        $slug = '';
        if ($request->input('slug')) {
            $slug = Str::slug($request->input('slug','-'));
        } else {
            $slug = Str::slug($request->input('name','-'));
        }

        $save_url = ProductCategory::where('id',$id)->first()->icon;

        if ($request->file('icon')) {
            unlink(base_path('public/'.$save_url));

            //Icon Process
            $manager = new ImageManager(new Driver());
            $icon = $request->file('icon');
            $name = $slug.'-'.Str::uuid()->toString().'.'.$icon->getClientOriginalExtension();
            $img = $manager->read($icon);
            $img = $img->resize(70,70);
            $img->toPng(80)->save(base_path('public/uploads/category-icon/'.$name));
            $save_url = 'uploads/category-icon/'.$name;
        }

        ProductCategory::where('id',$id)->update([
            'name' => $request->input('name'),
            'slug' => $slug,
            'status' => $request->input('status'),
            'icon' => $save_url,
        ]);
        toast(trans('Product Category Updated Successfully!'),'success')->width('350');
        return back();

    }


    public function delete($id){
        try {
            $have = Product::where('categoryId',$id)->count();
            if (!$have == 0) {
                return response()->json(['status' => 'have', 'message' => trans('You can\'t delete this category.')]);
            }
        $product = ProductCategory::where('id',$id)->first();
        $save_url = $product->icon;
        unlink(base_path('public/'.$save_url));
        $product->delete();
        return response()->json(['status' => 'success', 'message' => trans('Product Category Deleted Successfull.')]);
        } catch (\Throwable $th) {
        return response()->json(['status' => 'error', 'message' => trans('Something went worng!')]);
        }
    }

    //Product
    public function productindex(){

        $products = Product::with('productcategories','productgallery')
        ->latest()->get();

        return view('dashboard.product.index',compact('products'));
    }

    public function productadd(){
        $categories = ProductCategory::all();
        return view('dashboard.product.add',compact([
            'categories'
        ]));
    }


    public function productinsert(Request $request){
        $request->validate([
            'title' => 'required',
            'shortDescription' => 'required',
            'selePrice' => 'required',
            'unitType' => 'required',
            'categoryId' => 'required',
            'thumbnail' => 'required',
            'sku' => 'required',
        ]);

        //Slug
        $slug = "";
        if ($request->input('slug') == '') {
            $slug = Str::slug($request->input('title','-'));
        }else {
             $slug = Str::slug($request->input('slug'),'-');
        }


        //Feature Image
        $manager = new ImageManager(new Driver());
        $thumbnail = $request->file('thumbnail');
        $name = $slug.'-'.Str::uuid()->toString().'.'.$thumbnail->getClientOriginalExtension();
        $img = $manager->read($thumbnail);
        $img = $img->resize(310,250);
        $img->toJpeg(90)->save(base_path('public/uploads/products/feature/'.$name));
        $save_url = 'uploads/products/feature/'.$name;



        $product = Product::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'shortDescription' => $request->input('shortDescription'),
            'description' => $request->input('description'),
            'regularPrice' => $request->input('regularPrice'),
            'selePrice' => $request->input('selePrice'),
            'unitType' => $request->input('unitType'),
            'categoryId' => $request->input('categoryId'),
            'thumbnail' => $save_url,
            'sku' => $request->input('sku'),
            'status' => $request->input('status'),
        ]);

        if ($request->file('photo')) {

            foreach ($request->file('photo') as $photo) {
                $manager = new ImageManager(new Driver);
                $name = $slug.'-'.Str::uuid()->toString().'.'.$photo->getClientOriginalExtension();
                $img = $manager->read($photo);
                $img = $img->resize(310,250);
                $img->toJpeg(90)->save(base_path('public/uploads/products/gallery/'.$name));
                $gallery_image_url = 'uploads/products/gallery/'.$name;

                //insert into databse
                ProductGallery::insert([
                    'productId' => $product->id,
                    'photo' => $gallery_image_url,
                ]);

            }

        }
        toast(trans('Product Added Successfully!'),'success')->width('350');
        return back();

    }


    public function productedit($id){
        $categories = ProductCategory::all();
        $product = Product::where('id',$id)->with('productcategories','productgallery')->first();
        return view('dashboard.product.edit',compact('categories','product'));
    }



    public function productupdate(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'shortDescription' => 'required',
            'selePrice' => 'required',
            'unitType' => 'required',
            'categoryId' => 'required',
            'sku' => 'required',
        ]);

        //Slug
        $slug = "";
        if ($request->input('slug') == '') {
            $slug = Str::slug($request->input('title','-'));
        }else {
             $slug = Str::slug($request->input('slug'),'-');
        }

        //Feature Image
        $thumbnailUrl = Product::where('id',$id)->first()->thumbnail;
        if ($request->file('thumbnail')) {
            unlink(base_path('public/'.$thumbnailUrl));

            $manager = new ImageManager(new Driver());
            $thumbnail = $request->file('thumbnail');
            $name = $slug.'-'.Str::uuid()->toString().'.'.$thumbnail->getClientOriginalExtension();
            $img = $manager->read($thumbnail);
            $img = $img->resize(310,250);
            $img->toJpeg(90)->save(base_path('public/uploads/products/feature/'.$name));
            $thumbnailUrl = 'uploads/products/feature/'.$name;
        }

        $product = Product::where('id',$id)->update([
            'title' => $request->input('title'),
            'slug' => $slug,
            'shortDescription' => $request->input('shortDescription'),
            'description' => $request->input('description'),
            'regularPrice' => $request->input('regularPrice'),
            'selePrice' => $request->input('selePrice'),
            'unitType' => $request->input('unitType'),
            'categoryId' => $request->input('categoryId'),
            'thumbnail' => $thumbnailUrl,
            'sku' => $request->input('sku'),
            'status' => $request->input('status'),
        ]);

        if ($request->file('photo')) {

            foreach ($request->file('photo') as $photo) {
                $manager = new ImageManager(new Driver);
                $name = $slug.'-'.Str::uuid()->toString().'.'.$photo->getClientOriginalExtension();
                $img = $manager->read($photo);
                $img = $img->resize(310,250);
                $img->toJpeg(90)->save(base_path('public/uploads/products/gallery/'.$name));
                $gallery_image_url = 'uploads/products/gallery/'.$name;

                //insert into databse
                ProductGallery::insert([
                    'productId' => $id,
                    'photo' => $gallery_image_url,
                ]);

            }

        }
        toast(trans('Product Update Successfully!'),'success')->width('350');
        return back();

    }


    public function productdelete($id){

        try {
            $have = InvoicesProducts::where('productId',$id)->count();
            if (!$have == 0) {
                return response()->json(['status' => 'have', 'message' => trans('You can\'t delete this product.')]);
            }else{
                $thumbnailUrl = Product::where('id',$id)->first()->thumbnail;
                unlink(base_path('public/'.$thumbnailUrl));

               $imageGallery = ProductGallery::where('productId',$id)->get();

                if (count($imageGallery) > 0 ) {
                    foreach ($imageGallery as $image) {
                        $imgUrl = $image->photo;
                        unlink(base_path('public/'.$imgUrl));
                        $image->delete();
                    }
                }

                Product::where('id',$id)->first()->delete();
                return response()->json(['status' => 'success', 'message' => trans('Product Delete Successfull.')]);
            }
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => trans('Somethig went wrong!')]);
        }
    }


    public function pgidelete($id){
        try {
            $image = ProductGallery::find($id);
            unlink(base_path('public/'.$image->photo));
            $image->delete();
            return response(['status' => 'success', 'message' => trans('Gallery image delete successfull!')]);
        } catch (\Throwable $th) {
            return response(['status' => 'error', 'message' => trans('Somthing went wrong!')]);
        }
    }




}
