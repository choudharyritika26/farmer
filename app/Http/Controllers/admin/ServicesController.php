<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function create(){
        return view ('admin.services.form');
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('services'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image'=> 'nullable|image',
           
        ]);
        
        $services = new Services;
        $services->heading = $request->input('heading');
        $services->description = $request->input('description');
        $services->is_active = 1;
        // $services->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $services->image = $filename;
        }
        $services->save();
      // dd($services);
      //return redirect()->route('services-index');
        // return redirect()->route('');
        return response()->json([
            'message' => 'Product Add Successfully',
            'redirect_url' => route('services-index'),
        ]);
         }


    //==============index page===================
        public function index(){
            $services = services::all();
            $services = services::where('is_active',1)->get();
            return view('admin.services.index',compact('services'));
        }  

        //========================update=====================
    public function edit($id){
        $services = services::find($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $services = services::find($id);
        $services->heading = $request->input('heading');
        $services->description = $request->input('description');
        //$services->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $services->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/services/' . $services->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/services', $imageName);
    
        //     // Update the services model with the new image path
        //     $services->image = $imageName;
        // }
    
        $services->update();
        //return redirect()->route('services-index');
        return response()->json([
            'message' => 'Product Edit Successfully',
            'redirect_url' => route('services-index'),
        ]);
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $services = services::find($id);
        // $services->delete();
        $services->is_active = 0; // Set is_active to 0, but don't delete the document
        $services->save(); // Save the changes
       // return redirect()->back()->with('status','services $services Deleted Successfully');
       return redirect()->route('services-index');
    }
    // public function destroy($id)
    // {
    //     $about = About::find($id);
    //     $about->is_active = 0; // Set is_active to 0, but don't delete the document
    //     $about->save(); // Save the changes
    //     return redirect()->back()->with('status', 'About ' . $about->name . ' Deactivated Successfully');
    // }
//=================End-delete=================

}
