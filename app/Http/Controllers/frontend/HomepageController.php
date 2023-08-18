<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomerUser;
use App\Models\service;
use App\Models\User;
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
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'role'=>'customer'
    ]);
    return redirect()->route('hlogin');
}

  
  public function hlogin_submit(Request $request){
    // dd($request->all());
    $credentials = $request->except('_token');
//    dd($credentials);
   if(auth()->attempt($credentials)){
    
       return redirect()->route('homepage');

    }
    else{
       
       
   return redirect()->back()->withErrors(['Invalid login information']);



    }
    
    

}
}











