<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function table () {
        $customer=Customer::paginate(5);
        return view('backend.page.customer.table',compact('customer'));
    }
    public function form ()
    {
        return view('backend.page.customer.form');
    }

    public function store (Request $request)
    {
        //  dd($request);
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'LastVisit'=>'required',

        ]);

        // dd($request->all());
        Customer::create([

            'name'=>$request->name,
            'phone_num'=>$request->phone,
            'email'=>$request->email,
            'last_visit'=>$request->LastVisit,

        ]);
        return redirect()->route('customer.table');
    }



    public function customer_report(){
        return view('backend.page.report.customer_report');
    }

    public function customer_report_search(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $customer=Customer::whereBetween('created_at', [$from , $to])->get();
        return view('backend.page.report.customer_report',compact('customer'));

    }


        public function edit($id)
        {
            $customer=Customer::find($id);
        return view('backend.page.customer.edit',compact('customer'));
        }

       



    }


