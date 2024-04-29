<?php

namespace App\Http\Controllers;

use App\Models\DeliveryLocation;
use Illuminate\Http\Request;

class DeliveryLocationController extends Controller
{
    public function index(){
        $deliveryLocations = DeliveryLocation::latest()->paginate(25);
        return view('dashboard.deliveryLocation.index',compact('deliveryLocations'));
    }

    public function show(){
        return view('dashboard.deliveryLocation.show');
    }


    public function insert(Request $request){
        $request->validate([
            'address' => 'required',
            'charge' => 'required|numeric'
        ]);

        DeliveryLocation::insert([
            'address' => $request->input('address'),
            'charge' => $request->input('charge'),
            'status' => $request->input('status'),
        ]);
        return back()->with('success','Delivery Location Added Successfully!');
    }


    public function edit($id){
        $deliveryLocation = DeliveryLocation::where('id',$id)->first();
        return view('dashboard.deliveryLocation.edit',compact('deliveryLocation'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'address' => 'required',
            'charge' => 'required|numeric'
        ]);

        DeliveryLocation::where('id',$id)->update([
            'address' => $request->input('address'),
            'charge' => $request->input('charge'),
            'status' => $request->input('status'),
        ]);
        return back()->with('success','Delivery Location Update Successfully!');
    }

    public function delete( $id){
        DeliveryLocation::where('id',$id)->delete();
        return back()->with('success','Delivery Location Deleted Successfully!');
    }



}
