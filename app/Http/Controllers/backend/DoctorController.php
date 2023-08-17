<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\User;
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
    
}
