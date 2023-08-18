<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomerUser;
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
    
    public function hregister(){
      return view('frontend.pages.hregister');
  }

  public function hregister_submit(Request $request){

    // dd($request->all());
    CustomerUser::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ]);
    return to_route('hregister');
}

  
  public function hlogin_submit(Request $request){
    // dd($request->all());
    $credentials = $request->except('_token');
//    dd($credentials);
   if(auth()->guard('customer')->attempt($credentials)){

      dd('login');
    //    return redirect()->route('dashboard');


    }
    else{
        dd('no login');

       // return to_route('login');
    //    return redirect()->back()->withErrors(['Invalid login information']);



    }
    
    

}
}











