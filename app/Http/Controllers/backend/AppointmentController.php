<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function table () {
        $appointment=Appointment::paginate(5);
        return view('backend.page.appointment.tabel',compact('appointment'));
    }
    public function form ()
    {
        return view('backend.page.appointment.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'customer_name'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',

        ]);

        // dd($request->all());
        Appointment::create([ 

            'customer_name'=>$request->customer_name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact_num,

        ]);
        return redirect()->route('appointment.table');

    }
}
