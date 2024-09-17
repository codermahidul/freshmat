<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
            'supportNumber' => 'required',
            'supportText' => 'required',
        ]);

        Topbar::find(1)->update([
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'location' => $request->input('location'),
            'supportNumber' => $request->input('supportNumber'),
            'supportText' => $request->input('supportText'),
        ]);

        toast(trans('Topbar Content Update Successfully!'),'success')->width('350');
        return back();
    }
}
