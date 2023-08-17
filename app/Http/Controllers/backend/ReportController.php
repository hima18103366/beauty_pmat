<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    
    public function all_report(){

       
        return view('backend.page.report.allreport');
    }
}
