<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;

class EmailTemplateController extends Controller
{
    public function index(){
        $emailTemplates = EmailTemplate::latest()->get();
        return view('dashboard.emailTemplate.index',compact('emailTemplates'));
    }

    public function edit($id){
        $emailTemplate = EmailTemplate::where('id',$id)->first();
        return view('dashboard.emailTemplate.edit',compact('emailTemplate'));
    }

    public function update(Request $request, $id){
        $request->validate([
            '*' => 'required'
        ]);

        EmailTemplate::where('id',$id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'content' => $request->description,
        ]);

        toast('Template Update Successfully!', 'success')->width('350');
        return redirect()->route('emailTemplate');
    }



}
