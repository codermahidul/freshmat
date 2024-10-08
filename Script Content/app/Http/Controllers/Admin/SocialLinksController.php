<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
            toast(trans('Your Social link added successfully!'),'success');
            return back();
        }
    }

    public function delete($id){
        SocialLinks::find($id)->delete();
        toast(trans('Social Link Deleted Successfull!'),'success');
        return back();
    }
}
