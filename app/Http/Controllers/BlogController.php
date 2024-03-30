<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function index(){
        $posts = BlogPost::join('users','blog_posts.userId','=','users.id')
        ->join('blog_categories','blog_posts.categoryId','=','blog_categories.id')
        ->select('blog_posts.*','users.name as author','blog_categories.name as category')
        ->get();
        return view('dashboard.blog.blog',compact('posts'));
    }

    function blogAdd(){
        $categories = BlogCategory::all();
        return view('dashboard.blog.addblog',compact('categories'));
    }

    function blogInsert(Request $request){
        return $request->all();
    }
    
    //Category
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
