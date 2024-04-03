<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\CommentsReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image',
        ]);

        //Auth::user()->id;

        //Slug
        $slug = "";
        if ($request->input('slug') == '') {
            $name = $request->input('title');
            $slug = Str::lower(Str::replace(' ', '-', $name));
        }else {
            $slug = Str::lower(Str::replace(' ','-',$request->input('slug')));
        }

        //Thumbnail Process
        $manager = new ImageManager(new Driver());
        $image = $request->file('thumbnail');
        $name = 'thumbnail'.'-'.Str::uuid()->toString().'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(830,480);// Size 830x480
        $img->toJpeg(80)->save(base_path('public/uploads/thumbnails/'.$name));
        $save_url = 'uploads/thumbnails/'.$name;
        
        BlogPost::insert([
            'userId' => Auth::user()->id,
            'categoryId' => $request->input('categoryId'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'thumbnail' => $save_url,
            'seoTitle' => $request->input('seotitle'),
            'seoDescription' => $request->input('seodescription'),
            'status' => $request->input('status')
        ]);

        return back()->with('success', 'Post Added Successfull!');
        

    }

    function blogDelete($id){
        
        $post = BlogPost::where('id',$id)->first();
        $post->thumbnail;
        unlink(base_path('public/'.$post->thumbnail));
        $post->delete();
        return back()->with('success','Post Deleted Successfully');
    }

    function blogEdit($id){
        $categories = BlogCategory::all();
        $post = BlogPost::where('id',$id)->first();
        return view('dashboard.blog.editblog',compact('categories','post'));
    }

    function blogUpdate(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'image',
        ]);

        //Slug
        $slug = "";
        if ($request->input('slug') == '') {
            $name = $request->input('title');
            $slug = Str::lower(Str::replace(' ', '-', $name));
        }else {
            $slug = Str::lower(Str::replace(' ','-',$request->input('slug')));
        }

        $thumbnail = $request->file('thumbnail');
        $save_url = BlogPost::where('id',$id)->first()->thumbnail;

        if ($thumbnail) {
            unlink(base_path('public/'.$save_url));

            //Thumbnail Process
            $manager = new ImageManager(new Driver());
            $image = $request->file('thumbnail');
            $name = 'thumbnail'.'-'.Str::uuid()->toString().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(830,480);// Size 830x480
            $img->toJpeg(80)->save(base_path('public/uploads/thumbnails/'.$name));
            $save_url = 'uploads/thumbnails/'.$name;
        }

        BlogPost::where('id',$id)->update([
            'categoryId' => $request->input('categoryId'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'thumbnail' => $save_url,
            'seoTitle' => $request->input('seotitle'),
            'seoDescription' => $request->input('seodescription'),
            'status' => $request->input('status')
        ]);

        return back()->with('success', 'Post Update Successfull!');

    }
    
    //Category
    function category(){
        $categories = BlogCategory::all();
        return view('dashboard.category.category',compact('categories'));
    }

    function categoryAdd(){
        return view('dashboard.category.categoryadd');
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

    function categoryDelete($id){

        $postExistsOnCategory = BlogPost::where('categoryId', $id)->exists();
        if ($postExistsOnCategory) {
            return back()->with('error','This Category Have Post. You can not delete this category.');
        }
        else{
            BlogCategory::where('id',$id)->delete();
            return back()->with('success','Category Deleted Successfully');
        }
    }

    function categoryEdit($id){

        $category = BlogCategory::where('id',$id)->first();
        return view('dashboard.category.categoryedit',compact('category'));
    }

    function categoryUpdate(Request $request, $id){
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

        BlogCategory::where('id',$id)->update([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return back()->with('success', 'Category Update Successfully!');
    }

    //Comments

    function commentIndex(){
        $comments = Comment::join('users','comments.userId','=','users.id')
        ->join('blog_posts','comments.postId','=','blog_posts.id')
        ->select('comments.*','users.name as userName','blog_posts.title as postTitle')->get();
        return view('dashboard.comments.index',compact('comments'));
    }

    function commentStatus($id){
        $status = Comment::where('id',$id)->first();

        if ($status->status == 'approve') {
            $status->update(['status' => 'pending']);
        }
        else{
            $status->update(['status' => 'approve']);
        }
        return back();
    }

    function commentDelete($id){
        Comment::where('id',$id)->delete();
        return back();
    }

    function commentReply($id){
        $comment = Comment::join('users', 'comments.userId', '=', 'users.id')
        ->select('comments.*', 'users.name as username')
        ->where('comments.id', $id)->first();

       $commentreplies =  CommentsReply::join('users','comments_replies.userId', '=', 'users.id')
        ->select('comments_replies.*', 'users.name as username')
        ->where('comments_replies.commentId',$id)->get();

        return view('dashboard.comments.reply',compact('comment','commentreplies'));
    }

    function commentReplyInsert(Request $request, $id){

        $request->validate([
            'reply' => 'required',
        ]);
        
        CommentsReply::insert([
            'commentId' => $id,
            'userId' => Auth::user()->id,
            'reply' => $request->input('reply')
        ]);

        return back()->with('success', 'Replied Successully');
    }

}
