<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    //Insert
    public function insert(Request $request, $id){
        $request->validate([
            'rating' => 'required|integer',
            'review' => 'required',
        ]);

        Reviews::insert([
            'userId' => Auth::user()->id,
            'productId' => $id,
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
        ]);

        toast(trans('Submit successfully!'),'success')->width('350');
        return back();
    }


    //Show
    public function index(){
        $reviews = Reviews::with(['user' => function($query){
            $query->select('id','name');
        }, 'product' => function($query) {
            $query->select('id', 'title'); // Assuming 'id' is the foreign key in the reviews table
        }])->latest()->get();
        return view('dashboard.reviews.index',compact([
            'reviews',
        ]));
    }

    //Update
    public function update(Request $request, $id){
        Reviews::where('id', $id)->update([
            'status' => $request->input('status'),
        ]);

        toast(trans('Status update successfull!'),'success')->width('350');
        return back();
    }

    //Delete
    public function delete($id){
        try {
            Reviews::find($id)->delete();
            return response(['status'=>'success', 'message' => trans('Review delete successfully!')]);
        } catch (\Throwable $th) {
            return response(['status'=>'error', 'message' => trans('Something went worng!')]);
        }
    }
}
