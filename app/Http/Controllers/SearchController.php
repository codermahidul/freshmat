<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $query = $request->input('search');

        $products = Product::where('status','active')->
        where('title', 'like', '%'.$query.'%')->
        latest()->paginate(12);
        return view('frontend.pages.shop',compact(['products','query']));
    }

}
