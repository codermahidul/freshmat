<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::latest()->get();
        return view('dashboard.message.index',compact('messages'));
    }

    //Frontend message send

    public function sendMessage(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if (setting('messageSaveOnDB') == 'yess') {
            Message::insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message'),
            ]);
        }

        $adminEmail = '';

        if (setting('messageReceiveEmail') == null) {
            $adminEmail = env('MAIL_FROM_ADDRESS');
        }else {
            $adminEmail = setting('messageReceiveEmail');
        }


        
        mailServer();
        //Send Email
        Mail::to($adminEmail)->send(new ContactMail($validated ));

        return back()->with('success','Your message has been sent successfully!');

    }

    //Message Delete

    public function messageDelete($id){
        Message::find($id)->delete();
        return redirect(route('inbox'))->with('success','Message Deleted Successfully!');
    }

    //Single message view
    public function messageView($id){
        Message::find($id)->update(['status' => 'read']);
        $message = Message::find($id);
        return view('dashboard.message.message',compact('message'));
    }


}
