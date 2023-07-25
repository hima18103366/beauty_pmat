<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home(){
        return view('frontend.pages.home');


    }

    public function hlogin(){
        return view('frontend.pages.hlogin');


    }


}
