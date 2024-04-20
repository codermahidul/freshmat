<?php

namespace App\Http\Controllers;

use App\Models\FAQS;
use Illuminate\Http\Request;

class FAQSController extends Controller
{

    function index(){
      $faqs= FAQS::latest()->paginate(10);
        return view('dashboard.faq.faqs', compact('faqs'));
    }

    function status($id){
        $singleFAQ = FAQS::where('id',$id)->first();
        if ($singleFAQ->status == 'active') {
            FAQS::where('id',$id)->update(['status' => 'deactive']);
            return back()->with('deactive','Question Active Successfully!');
        }else {
            FAQS::where('id',$id)->update(['status' => 'active']);
            return back()->with('active','Question Deactive Successfully!');
        }
    }

    function faqaAdd(){
        return view('dashboard.faq.faqsadd');
    }

    function faqsInsert(Request $request){
        $request->validate([
            '*' => 'required',
        ]);

        FAQS::insert([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status'),
        ]);
        return back()->with('success', 'New Question and Answer Added Successfully!');
    }

    function faqsDelete($id){
        FAQS::where('id',$id)->delete();
        return back()->with('success','FAQ Delete Successfully!');
    }

    function faqsEdit($id){
        $singleFAQS= FAQS::where('id',$id)->first();
        return view('dashboard.faq.faqsedit',compact('singleFAQS'));
    }

    function faqsUpdate(Request $request, $id){
        $request->validate([
            '*' => 'required',
        ]);

        FAQS::where('id',$id)->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status'),
        ]);

        return back()->with('success', 'Question Update Successfully!');

    }




}
