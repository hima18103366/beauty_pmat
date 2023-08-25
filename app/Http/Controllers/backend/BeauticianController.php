<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\beautician;
use App\Models\category;
use Illuminate\Http\Request;

class BeauticianController extends Controller
{
    public function table () {
        $beautician=Beautician::with('catid')->paginate(5);
        return view('backend.page.beautician.tabel',compact('beautician'));
    }
    public function form ()
    {
        $categories=category::all();
        return view('backend.page.beautician.form',compact('categories'));
    }

    public function store (Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
        ]);

        // dd($request->all());
        beautician::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'category_id'=>$request->category_id,
            'contact'=>$request->contact,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'comments'=>$request->comments,

        ]);
        return redirect()->route('beautician.table');

    }

    public function edit($id){
        $beautician=Beautician::find($id);
        $categories = category::all();
        return view('backend.page.beautician.edited',compact('beautician','categories'));
    }


    public function update(Request $request ,$id){

        //dd($request->all());
        $beauticianData = Beautician::find($id);
        $beauticianData->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'category_id'=>$request->category_id,
            'contact'=>$request->contact,
            'service'=>$request->service,
            'date'=>$request->date,
            'time'=>$request->time,
            'comments'=>$request->comments,

        ]);
        return to_route('beautician.table')->with('success','beautician Updated Successfully');

    }

    public function delete($id){
        beautician::find($id)->delete();
        return back()->with('success','beautician Deleted Successfully');
    }

}
