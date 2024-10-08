<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index(){
        $content = PrivacyPolicy::where('id',1)->first();
        return view('dashboard.pages.privacyPolicy.index',compact('content'));
    }

    public function ppupdate(Request $request){
        $request->validate([
            'content' => 'required',
        ]);

        PrivacyPolicy::where('id',1)->update([
            'content' => $request->input('content'),
        ]);

        toast(trans('Content Update Successfull!'), 'success')->width('350');
        return back();
    }



}
