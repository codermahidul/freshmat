<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs(){
        $contents = AboutUs::find(1);
        return view('dashboard.pages.aboutUs.index',compact('contents'));
    }
}
