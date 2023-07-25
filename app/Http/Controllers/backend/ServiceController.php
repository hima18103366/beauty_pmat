<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function table () {
        $service=Service::paginate(5);
        return view('backend.page.service.tabel',compact('service'));
    }
    public function form ()
    {
        return view('backend.page.service.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'service'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
// dd($request);
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/service',$fileName);

        }

        // dd($request->all());
        Service::create([ 

            'service'=>$request->service,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$fileName

        ]);
        return redirect()->route('service.table');

    }

}
