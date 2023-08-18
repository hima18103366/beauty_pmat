<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentMail;
use App\Models\appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function table () {
        $appointment=Appointment::paginate(5);
        return view('backend.page.appointment.tabel',compact('appointment'));
    }
    public function form ()
    {
        return view('backend.page.appointment.form');
    }

    public function store (Request $request)
    {
         
        $request->validate([
            'name'=>'required',
            'service'=>'required',
            'date'=>'required|unique',
            'time'=>'required|unique',
            'age'=>'required',

        ]);

        // dd($request->all());
        Appointment::create([ 

            'customer_name'=>$request->name,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,

        ]);
        $email=auth()->user()->email;
        Mail::to("$email")->send(new AppointmentMail());

        return redirect()->route('appointment.table');

    }

    public function fform ()
    {
        return view('frontend.pages.appointment.fform');
    }
    public function store_form(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'service'=>'required',
            'date'=>'required',
            'time'=>'required',
            'age'=>'required',
            'contact'=>'required',
        ]);
        //  dd($request->all());

        appointment::create([
            'customer_name'=>$request->name,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>Carbon::createFromFormat('H:i A', $request->time),
            'age'=>$request->age,
            'contact_num'=>$request->contact,
        ]);

        $email=auth()->user()->email;
       
        Mail::to("$email")->send(new AppointmentMail());
        return to_route('homepage');
    
    }

    public function appointment_report(){
        return view('backend.page.report.appointment_report');
    }

    public function appointment_report_search(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $appointment=Appointment::whereBetween('created_at', [$from , $to])->get();
        return view('backend.page.report.appointment_report',compact('appointment'));

    }


    public function Edit(int $appointment_id){
        $appointment=Appointment::find($appointment_id);
        return view('backend.page.appointment.edit',compact('appointment'));
    }


    public function update(Request $request ,$id){
        $appointmentData = Appointment::find($id);
        $appointmentData->update([

            'customer_name'=>$request->name,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,
           
        ]);
        return to_route('appointment.index')->with('success','appointment Updated Successfully');
         
    }

    public function delete($id){
        appointment::find($id)->delete();
        return back()->with('success','appointment Deleted Successfully');
    }
}
