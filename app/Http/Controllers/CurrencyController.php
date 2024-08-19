<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::all();
        return view('dashboard.currency.index',compact('currencies'));
    }


    public function show(){
        return view('dashboard.currency.add');
    }

    public function insert(Request $request){
        $request->validate([
            'currency' => 'required',
            'status' => 'required',
        ]);

        $currency = $request->input('currency');

        $currencyExists = DB::table('currencies')
        ->where('currency', $currency)
        ->exists();

        // If the currency does not exist, return an error response
        if ($currencyExists) {
        return redirect()->back()->withErrors(['currency' => 'The selected currency exist in our records.']);
        }

        Currency::insert([
            'currency' => $request->input('currency'),
            'status' => $request->input('status'),
        ]);

        toast('Currency added successfull!', 'success')->width('350');
        return redirect()->route('currency');

    }

    //Edit

    public function edit($id){
        $getCurrency = Currency::where('id',$id)->first();
        return view('dashboard.currency.edit',compact('getCurrency'));
    }


    //Update

    public function update(Request $request, $id){
        $request->validate([
            'currency' => 'required',
            'status' => 'required',
        ]);

        $currency = $request->input('currency');

        $currencyExists = DB::table('currencies')
        ->where('currency', $currency)
        ->where('id', '!=',$id)
        ->exists();

        if ($currencyExists) {
        return redirect()->back()->withErrors(['currency' => 'The selected currency exist in our records.']);
        }

        Currency::where('id',$id)->update([
            'currency' => $request->input('currency'),
            'status' => $request->input('status'),
        ]);

        toast('Currency update successfull!', 'success')->width('350');
        return redirect()->route('currency');
    }

    //Delete

    function delete($id)
    {
        try {
            $default = Currency::where('id',$id)->first()->default;
            if ($default == 'yes') {
                return response()->json(['status' => 'have', 'message' => 'Deletion of the default currency is not allowed.']);
            } else {
                Currency::where('id',$id)->delete();
                return response()->json(['status' => 'success', 'message' => 'Currency Deleted Successfully.']);
            }
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }


}
