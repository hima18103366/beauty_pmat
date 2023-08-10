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
            'name'=>'required',
            'service'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',

        ]);

        // dd($request->all());
        Appointment::create([ 

            'customer_name'=>$request->name,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,

        ]);
        return redirect()->route('appointment.table');

    }

    public function fform ()
    {
        return view('frontend.pages.appointment.fform');
    }
    public function store_form(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'service'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',
            'contact'=>'required',
        ]);
        //  dd($request->all());

        appointment::create([
            'customer_name'=>$request->name,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,
        ]);

        return to_route('homepage');
    }

}
