<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsCondition;

class TermsConditionController extends Controller
{
    public function index(){
        $contents = TermsCondition::where('id',1)->first();
        return view('dashboard.pages.termsCondition.index',compact('contents'));
    }

    public function tcupdate(Request $request){
        $request->validate([
            'content' => 'required',
        ]);

        TermsCondition::where('id',1)->update([
            'content' => $request->input('content'),
        ]);

        toast('Content Update Successfull!', 'success')->width('350');
        return back();
    }

}
