<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    public function login(){
        if (!Auth::check()) {
            return view('auth.admin.login');
        }
        return redirect()->route('home');
    }
}
