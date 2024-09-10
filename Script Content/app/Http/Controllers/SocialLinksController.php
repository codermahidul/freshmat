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
            toast('You can add max 5 social links','warning');
            return back();
        }else{
            SocialLinks::insert([
                'icon' => $request->input('icon'),
                'url' => $request->input('link'),
            ]);
            toast('Your Social link added successfully!','success');
            return back();
        }
    }

    public function delete($id){
        SocialLinks::find($id)->delete();
        toast('Social Link Deleted Successfull!','success');
        return back();
    }
}
