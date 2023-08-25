<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands=Brand::get();
        return view('backend.page.brand.index',compact('brands'));
    }

    public function create(){
        return view('backend.page.brand.create');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'email'=>'required|unique:brands',
        ]);

       $fileName=null;
       if ($request->hasFile('image')){
        $fileName='hima'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads/brand',$fileName);
       }




        Brand::create([
            // db column name => form input name 
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$fileName,
            'details'=>$request->details
        ]);
        
        return redirect()->route('brand.index');
    }


    public function Edit(int $brand_id){
        $brand=Brand::find($brand_id);
        return view('backend.page.brand.edit',compact('brand'));
    }

    public function update(Request $request ,$id){
        $brandData = Brand::find($id);
        $brandData->update([
            'name'=>$request->name,
            'email'=>$request->email,
        
            'details'=>$request->details
        ]);
        return to_route('brand.index')->with('success','brand Updated Successfully');
         
    }

    public function delete($id){
        brand::find($id)->delete();
        return back()->with('success','brand Deleted Successfully');   }


    public function view($id){
        $brand=Brand::find($id);
        return view('backend.page.brand.view',compact('brand'));
    }

}
