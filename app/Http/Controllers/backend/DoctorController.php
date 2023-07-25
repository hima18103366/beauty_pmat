<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function table (){
        return view('backend.page.doctor.tabel');
    }
    public function form (){
        return view('backend.page.doctor.form');
    }
}
