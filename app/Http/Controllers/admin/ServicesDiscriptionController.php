<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesDiscription;

class ServicesDiscriptionController extends Controller
{
    public function create(){
        return view ('admin.servicesdis.form');
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('servicesdis'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            //'heading' => 'required',
            'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'nullable|image',
           
        ]);
        
        $servicesdis = new ServicesDiscription;
        //$servicesdis->heading = $request->input('heading');
        $servicesdis->description = $request->input('description');
        $servicesdis->is_active = 1;
        // $servicesdis->image = $request->input('image');
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('storage/', $filename);
        //     $servicesdis->image = $filename;
        // }
        $servicesdis->save();
      // dd($servicesdis);
      //return redirect()->route('servicesdis-index');
        // return redirect()->route('');
        return response()->json([
            'message' => 'Product Add Successfully',
            'redirect_url' => route('servicesdis-index'),
        ]);
         }


    //==============index page===================
        public function index(){
            $servicesdis = ServicesDiscription::where('is_active',1)->get();
            $about = ServicesDiscription::where('is_active',1)->get();
            return view('admin.servicesdis.index',compact('servicesdis'));
        }  

        //========================update=====================
    public function edit($id){
        $servicesdis = ServicesDiscription::find($id);
        return view('admin.servicesdis.edit', compact('servicesdis'));
    }

    public function update(Request $request, $id)
    {
        $servicesdis = ServicesDiscription::find($id);
        $servicesdis->heading = $request->input('heading');
        $servicesdis->description = $request->input('description');
        //$servicesdis->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $servicesdis->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/servicesdis/' . $servicesdis->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/servicesdis', $imageName);
    
        //     // Update the servicesdis model with the new image path
        //     $servicesdis->image = $imageName;
        // }
    
        $servicesdis->update();
        //return redirect()->route('servicesdis-index');
        return response()->json([
            'message' => 'Product Edit Successfully',
            'redirect_url' => route('servicesdis-index'),
        ]);
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $servicesdis = ServicesDiscription::find($id);
        // $servicesdis->delete();
        $servicesdis->is_active = 0; // Set is_active to 0, but don't delete the document
        $servicesdis->save(); // Save the changes
       // return redirect()->back()->with('status','servicesdis $servicesdis Deleted Successfully');
       return redirect()->route('servicesdis-index');
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
