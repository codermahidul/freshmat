<?php

namespace App\Http\Controllers;

use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class EmailConfigurationController extends Controller
{
    public function index(){
        return view('dashboard.emailConfig.index');
    }


    public function update(Request $request){
        $request->validate([
            'mailHost' => 'required',
            'email' => 'required|email',
            'smtpUserName' => 'required',
            'smtpPassword' => 'required',
            'mailPort' => 'required',
            'mailEncryption' => 'required',
        ]);

        $attributes = ['id' => 1];
        $values = [
            'mailHost' => $request->input('mailHost'),
            'email' => $request->input('email'),
            'smtpUserName' => $request->input('smtpUserName'),
            'smtpPassword' => $request->input('smtpPassword'),
            'mailPort' => $request->input('mailPort'),
            'mailEncryption' => $request->input('mailEncryption'),
        ];

        EmailConfiguration::updateOrCreate($attributes,$values);

        toast(trans('Email Configuration Update Successfull!'),'success');
        return back();
    }
}
