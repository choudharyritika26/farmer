<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Singleproduct;

class SingleproductController extends Controller
{
         // public function singleproduct(){
    //     return view('admin.singleproduct');
    // }

    public function create(){
        return view ('admin.singleproduct.form');
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('singleproduct'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'heading' => 'required',
            'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image'=> 'required|image',
           
        ]);
        
        $singleproduct = new Singleproduct;
        $singleproduct->heading = $request->input('heading');
        $singleproduct->description = $request->input('description');
        // $singleproduct->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $singleproduct->image = $filename;
        }
        $singleproduct->save();
      // dd($singleproduct);
      return redirect()->route('singleproduct-index');
        // return redirect()->route('');
         }


    //==============index page===================
        public function index(){
            $singleproduct = Singleproduct::all();
            return view('admin.singleproduct.index',compact('singleproduct'));
        }  

        //========================update=====================
    public function edit($id){
        $singleproduct = Singleproduct::find($id);
        return view('admin.singleproduct.edit', compact('singleproduct'));
    }

    public function update(Request $request, $id)
    {
        $singleproduct = Singleproduct::find($id);
        $singleproduct->heading = $request->input('heading');
        $singleproduct->description = $request->input('description');
        //$singleproduct->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $singleproduct->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/singleproduct/' . $singleproduct->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/singleproduct', $imageName);
    
        //     // Update the singleproduct model with the new image path
        //     $singleproduct->image = $imageName;
        // }
    
        $singleproduct->update();
        return redirect()->route('singleproduct-index');
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $singleproduct = Singleproduct::find($id);
        $singleproduct->delete();
        return redirect()->back()->with('status','singleproduct$singleproduct Deleted Successfully');
    }
//=================End-delete=================
}
