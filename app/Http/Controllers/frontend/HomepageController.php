<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ]);
    return to_route('hregister');
}
  
  public function hlogin_submit(Request $request){
    $credentials = $request->except('_token');
    $authentication=auth()->attempt($credentials);
    if ($authentication){
       // return to_route('dashboard');
       return redirect()->route('dashboard');


    }
    else{
       // return to_route('login');
       return redirect()->back()->withErrors(['Invalid login information']);



    }
    
    

}
}











