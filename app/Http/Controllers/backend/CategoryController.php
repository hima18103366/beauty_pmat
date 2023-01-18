<?php

namespace App\Http\Controllers\backend;

use App\Models\Sub;
use App\Models\category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index (){
        return view('backend.page.Category.subindex');
    }
    public function cat(){

        $cat=category::all();
       // dd($cat);
        return view('backend.page.Category.category',compact('cat'));
    }
    public function cafrom(){
        return view('backend.page.Category.category');
    }
    public function form()
    {
        return view('backend.page.Category.create');

    }
    public function Edit( $category_id){
        $category=category::find($category_id);
        return view('backend.page.Category.Edit',compact('category'));
    }
    
    


    public function submit(Request $request){
        
        
            Sub::create([
               
                'Name'=>$request->Name,
                'email'=>$request->email,
                'location'=>$request->location,
                'number'=>$request->number,
            
            ]);
            
           return redirect()->back();
            
    }

    public function store (Request $request)
    {
        category::create([

            'name'=>$request->name,
            'details'=>$request->details,
            'status'=>$request->status,
            



        ]);
        return redirect()->route('category.table');

    }

    public function update(Request $request ,$id){
        $categoryData = Category::find($id);
        $categoryData->update([

            'name'=>$request->name,
            'details'=>$request->details,
            'status'=>$request->status,
            
        ]);
        return to_route('category.table')->with('success','Category Updated Successfully');
         
    }

    public function delete($id){
        category::find($id)->delete();
        return back()->with('success','Category Deleted Successfully');
    }

    public function view($id){
        $category=category::find($id);
        return view('backend.page.category.view',compact('category'));
    }
    
}

