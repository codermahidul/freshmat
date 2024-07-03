<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviews;

class ReviewsController extends Controller
{
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

        toast('Submit successfully!','success')->width('350');
        return back();
    }
}
