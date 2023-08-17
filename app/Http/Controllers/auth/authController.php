<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function register_submit(Request $request){
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]);
            return to_route('register');
    }
    public function login(){
        return view('auth.login');
    }
    public function login_submit(Request $request){
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


  public function logout(){
    Auth::logout();
    return to_route('login');
  }
    
}
