<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\dappointment;
use Illuminate\Http\Request;

class DAppointmentController extends Controller
{
    public function table () {
        $dappointment=DAppointment::paginate(5);
        return view('backend.page.dappointment.tabel',compact('dappointment'));
    }
    public function form ()
    {
        return view('backend.page.dappointment.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'time'=>'required|unique',
            'age'=>'required|unique',

        ]);

        // dd($request->all());
        DAppointment::create([ 

            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,

        ]);
        return redirect()->route('dappointment.table');

    }



    public function dform ()
    {
        return view('frontend.pages.appointment.dform');
    }
    public function store_dform(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',
            'contact'=>'required',
        ]);
        //  dd($request->all());

        dappointment::create([
            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,
        ]);

        return to_route('homepage');
    }

    public function dappointment_report(){
        return view('backend.page.report.dappointment_report');
    }

    public function dappointment_report_search(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $dappointment=DAppointment::whereBetween('created_at', [$from , $to])->get();
        return view('backend.page.report.dappointment_report',compact('dappointment'));

    }

    public function Edit(int $dappointment_id){
        $dappointment=Dappointment::find($dappointment_id);
        return view('backend.page.dappointment.edit',compact('dappointment'));
    }


    public function update(Request $request ,$id){
        $dappointmentData = DAppointment::find($id);
        $dappointmentData->update([

            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,
           
        ]);
        return to_route('dappointment.index')->with('success','dappointment Updated Successfully');
         
    }

    public function delete($id){
        dappointment::find($id)->delete();
        return back()->with('success','dappointment Deleted Successfully');
    }


    public function prescription ($id)
    {
        $appointment=DAppointment::find($id);
        return view('backend.page.dappointment.prescription',compact('appointment'));
    }
    public function pstore (Request $request,$id)
    {
        
        DAppointment::find($id)->update([ 
           
            'link'=>$request->link,

        ]);
        return redirect()->back();

    }

}
