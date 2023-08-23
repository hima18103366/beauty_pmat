<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Mail\AppointmentLinkEmail;
use App\Mail\AppointmentMail;
use App\Mail\AppointmentPrescriptionEmail;
use App\Models\dappointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'name' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'age' => 'required|integer',
            'contact' => 'required|numeric',
        ]);

        

        // dd($request->all());
        DAppointment::create([ 

            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,

        ]);
        
        return redirect()->back();

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

        $appointment=dappointment::create([
            'customer_name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'age'=>$request->age,
            'contact_num'=>$request->contact,
            'payment_status'=>'pending',
            'transaction_id'=>1,
            'amount'=>1000
        ]);

        $email=auth()->user()->email;
        Mail::to("$email")->send(new AppointmentMail());

        // if($request->payment_method=='ssl')
        // {
        //     //call to ssl
        // }
            $this->pay($appointment);


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
        
        $link=DAppointment::find($id);
        $link->update([ 
           
            'link'=>$request->link,

        ]);

        
        Mail::to('appointment@gmail.com')->send(new AppointmentLinkEmail($link->link));
        return redirect()->back();

    }


    public function dprescription ($id)
    {
        $appointment=DAppointment::find($id);
        return view('backend.page.dappointment.dprescription',compact('appointment'));
    }
    public function dpstore (Request $request,$id)
    {
        
        $prescription=DAppointment::find($id);
        $prescription->update([ 
           
            'patient_name'=>$request->patient_name,
            'patient_age'=>$request->patient_age,
            'medications'=>$request->medications,
            'notes'=>$request->notes,
          

        ]);

        
        Mail::to('appointment@gmail.com')->send(new AppointmentPrescriptionEmail($prescription));
        return redirect()->back();

    }

    public function pay($appointment)
    {
        $post_data = array();
        $post_data['total_amount'] = '1000'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $appointment->id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $appointment->customer_name;
        $post_data['cus_email'] = auth()->user()->email;
        $post_data['cus_add1'] = 'Dhaka';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

}


