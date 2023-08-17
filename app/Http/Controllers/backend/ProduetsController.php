<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\Produets;
use Illuminate\Http\Request;

class ProduetsController extends Controller
{
    public function index(){

        $produets=Produets::paginate(5);
      //dd($produets);
      
        return view('backend.page.produets.index',compact('produets'));
    }
    public function create(){
        return view('backend.page.produets.create');
    }
    
    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'Name'=>'required',
            'Size'=>'required',
            'Image'=>'required',
            'Wihgt'=>'required',
            'Quentity'=>'required',
            'Action'=>'required',
            
        ]);

        Produets::create([
            // db column name => form input name 
            'Name'=>$request->Name,
            'Size'=>$request->Size,
            'Image'=>$request->Image,
            'Wihgt'=>$request->Wihgt,
            'Quentity'=>$request->Quentity,
            'Action'=>$request->Action,
        ]);
        
        return redirect()->route('produets.index');
    }
}
