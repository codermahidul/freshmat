<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
            return back()->with('deactive',trans('Question Active Successfully!'));
        }else {
            FAQS::where('id',$id)->update(['status' => 'active']);
            toast(trans('Question Deactive Successfully!'),'success');
            return back();
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
        toast(trans('New Question and Answer Added Successfully!'),'success')->width('350');
        return redirect()->route('faqs');
    }

    function faqsDelete($id){

        try {
            FAQS::where('id',$id)->delete();
            return response()->json(['status' => 'success', 'message' => trans('FAQ Delete Successfully!')]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => trans('Somthing went wrong!')]);
        }

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

        toast(trans('Question Update Successfully!'),'success');
        return back();

    }




}
