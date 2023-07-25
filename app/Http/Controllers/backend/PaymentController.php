<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function table () {
        $payment=Payment::paginate(5);
        return view('backend.page.payment.tabel',compact('payment'));
    }
    public function form ()
    {
        return view('backend.page.payment.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'date'=>'required',
            'description'=>'required',
            'amount'=>'required',
        ]);

        // dd($request->all());
        Payment::create([

            'date'=>$request->date,
            'description'=>$request->description,
            'amount'=>$request->amount,

        ]);
        return redirect()->route('payment.table');

    }

}


