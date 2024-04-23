<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index(){
        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $topCategories = ProductCategory::latest()->take(4)->get();

        // foreach ($topCategories as $topcategory) {
        //    $products = Product::where('categoryId',$topcategory->id)->with('productcategories','productgallery')->get();

        // }
        // return $products;

        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->get();

        return view('welcome',compact([
            'productCategories',
            'topCategories',
            'latestProduct',
        ]));
    }




}
