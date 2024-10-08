<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\DeliveryLocation;
use Illuminate\Http\Request;

class DeliveryLocationController extends Controller
{
    public function index(){
        $deliveryLocations = DeliveryLocation::latest()->get();
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
        toast(trans('Delivery Location Added Successfully!'),'success')->width('350');
        return back();
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
        toast(trans('Delivery Location Update Successfully!'),'success')->width('350');
        return back();
    }

    public function delete( $id){
        try {
            DeliveryLocation::where('id',$id)->delete();
        return response()->json(['status' => 'success', 'message' => trans('Delivery Location Deleted Successfully.')]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => trans('Somthing went wrong!')]);
        }
    }



}
