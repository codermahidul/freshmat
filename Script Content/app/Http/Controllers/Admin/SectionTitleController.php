<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    //

    public function index(){
        return view('dashboard.sections.title');
    }

    public function update(Request $request, $id){

        $request->validate([
            '*' => 'required',
        ]);

        SectionTitle::where('id',$id)->update([
            'subheading' => $request->input('subheading'),
            'heading' => $request->input('heading'),
            'description' => $request->input('description'),
        ]);

        toast(trans('Section Update Successfull!'),'success');
        return back();
    }


}
