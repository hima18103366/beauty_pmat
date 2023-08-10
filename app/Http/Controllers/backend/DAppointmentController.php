<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\dappointment;
use Illuminate\Http\Request;

class DAppointmentController extends Controller
{
    public function table () {
        $dappointment=DAppointment::paginate(5);
        return view('backend.page.dappointment.tabel',compact('dappointment'));
    }
    public function form ()
    {
        return view('backend.page.dappointment.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',

        ]);

        // dd($request->all());
        DAppointment::create([ 

            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,

        ]);
        return redirect()->route('dappointment.table');

    }

}
