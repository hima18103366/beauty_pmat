<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function table () {
        $customer=Customer::paginate(5);
        return view('backend.page.customer.table',compact('customer'));
    }
    public function form ()
    {
        return view('backend.page.customer.form');
    }

    public function store (Request $request)
    {
        //  dd($request);
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'LastVisit'=>'required',

        ]);

        // dd($request->all());
        Customer::create([

            'name'=>$request->name,
            'phone_num'=>$request->phone,
            'email'=>$request->email,
            'last_visit'=>$request->LastVisit,

        ]);
        return redirect()->route('customer.table');
    }


        public function edit($id)
        {
            $customer=Customer::find($id);
        return view('backend.page.customer.edit',compact('customer'));
        }
    
        // public function update(Request $request ,$id){
        //     $customerData = Customer::find($id);
        //     $customerData->update([
        //         'name'=>$request->name,
        //         'email'=>$request->email,
            
        //         'details'=>$request->details
        //     ]);
        //     return to_route('brand.index')->with('success','brand Updated Successfully');
             
        // }
    
        // public function delete($id){
        //     brand::find($id)->delete();
        //     return back()->with('success','brand Deleted Successfully');
        // }
    
    
        // public function view($id){
        //     $brand=Brand::find($id);
        //     return view('backend.page.brand.view',compact('brand'));
        // }
    
        

    }
    

