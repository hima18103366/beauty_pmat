<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function table (){
        $doctor=User::where('role','doctor')->paginate(5);
        return view('backend.page.doctor.tabel',compact('doctor'));
    }
    public function form (){
        return view('backend.page.doctor.form');
    }

    public function store (Request $request)
    {
        //  dd($request);
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'date'=>'required',
            'time'=>'required',
            'status'=>'required',

        ]);

        // dd($request->all());
        Doctor::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'date'=>$request->date,
            'time'=>$request->time,
            'status'=>$request->status,

        ]);
        return redirect()->route('doctor.table');
    }
 
}
