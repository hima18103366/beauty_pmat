<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home(){
        $services=service::all();
        return view('frontend.pages.home',compact('services'));


    }

    public function hlogin(){
        return view('frontend.pages.hlogin');


    }

    public function page(){
        return view('frontend.pages.page');
    }


}
