<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
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
        Toastr::success('message', 'payment', ['successfully submit']);


        return redirect()->back();

    }

    public function payment_report(){
        return view('backend.page.report.payment_report');
    }

    public function payment_report_search(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $customer=Payment::whereBetween('created_at', [$from , $to])->get();
        return view('backend.page.report.payment_report',compact('payment'));

    }




}


