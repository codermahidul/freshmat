<?php

namespace App\Http\Controllers;

use App\Models\SocialLinks;
use Illuminate\Http\Request;

class SocialLinksController extends Controller
{
    public function insert(Request $request){
        $request->validate([
            'icon' => 'required',
            'link' => 'required|url',
        ]);

        if (SocialLinks::all()->count() >= 5) {
            return back()->with('error','You can add max 5 social links');
        }else{
            SocialLinks::insert([
                'icon' => $request->input('icon'),
                'url' => $request->input('link'),
            ]);
            return back()->with('success','Your Social link added successfully!');
        }
    }

    public function delete($id){
        SocialLinks::find($id)->delete();
        return back()->with('success','Social Link Deleted Successfull!');
    }
}
