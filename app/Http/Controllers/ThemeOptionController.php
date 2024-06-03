<?php

namespace App\Http\Controllers;

use App\Models\Topbar;
use Illuminate\Http\Request;

class ThemeOptionController extends Controller
{
    function topbar(){
        return view('dashboard.themeoption.topbar');
    }

    function topbarUpdate(Request $request){
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'location' => 'required',
        ]);

        Topbar::find(1)->update([
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'location' => $request->input('location'),
        ]);

        return back()->with('success', 'Topbar Content Update Successfully!');
    }
}
