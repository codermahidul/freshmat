<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function index(){
    }
    
    function category(){
        $categories = BlogCategory::all();
        return view('dashboard.blog.category',compact('categories'));
    }

    function categoryAdd(){
        return view('dashboard.blog.categoryadd');
    }


    function categoryInsert(Request $request){
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'Category name field is required.'
        ]);

        $slug = '';

        if ($request->input('slug') == '') {
            $name = $request->input('name');
            $slug = Str::lower(Str::replace(' ', '-', $name));
        }else {
            $slug = Str::lower(Str::replace(' ','-',$request->input('slug')));
        }

        BlogCategory::insert([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return back()->with('success', 'Category Add Successfully!');

    }

}
