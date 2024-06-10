<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Invoice::with('user')->latest()->paginate(20);
        return view('dashboard.order.index',compact('orders'));
    }
}
