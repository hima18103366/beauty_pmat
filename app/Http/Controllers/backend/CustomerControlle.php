<?php

namespace App\Http\Controllers;


use APP\Models\Customer;
use Illuminate\Http\Request;

class CustomerControlle extends Controller
{
    public function table()
    {
        $customers=Customer::all();
        return view('backend.pages.customer.table',compact('customers'));
    }
}
