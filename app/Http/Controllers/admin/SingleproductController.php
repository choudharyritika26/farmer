<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Singleproduct;
use App\Models\Product;

class SingleproductController extends Controller
{
         // public function singleproduct(){
    //     return view('admin.singleproduct');
    // }

    public function detail($id){
        $singleproduct = Singleproduct::find($id);
        // $products = Product::where('is_active',1)->get();
        return view ('admin.singleproduct.detail',compact('products','detail'));   
       }

    public function create(){    
        $products = Product::where('is_active',1)->get();
        return view ('admin.singleproduct.form',compact('products'));
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('singleproduct'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'product' => 'required',
            'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'required|image',
           
        ]);
        
        $singleproduct = new Singleproduct;
        $singleproduct->product = $request->input('product');
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
      //return redirect()->route('singleproduct-index');
        // return redirect()->route('');
        return response()->json([
            'message' => 'Singleproduct Add Successfully',
            'redirect_url' => route('singleproduct-index'),
        ]);
         }


    //==============index page===================
        public function index(){
            $singleproduct = Singleproduct::where('is_active',1)->get();
            return view('admin.singleproduct.index',compact('singleproduct'));
        }  

        //========================update=====================
    public function edit($id){
        $singleproduct = Singleproduct::find($id);
        $products = Product::where('is_active',1)->get();   
        return view('admin.singleproduct.edit', compact('singleproduct','products'));
    }

    public function update(Request $request, $id)
    {
        $singleproduct = Singleproduct::find($id);
        $singleproduct->product = $request->input('product');
        $singleproduct->heading = $request->input('heading');
        $singleproduct->description = $request->input('description');
        //$singleproduct->image = $request->input('image');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/', $filename);
            $singleproduct->image = $filename;
        } else {
            // If no image is provided, you can either leave it as null or do something else.
            $singleproduct->image = null;
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
        // return redirect()->route('singleproduct-index');
        return response()->json([
            'message' => 'Singleproduct Edit Successfully',
            'redirect_url' => route('singleproduct-index'),
        ]);
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $singleproduct = Singleproduct::find($id);
        // $singleproduct->delete();
        // return redirect()->back()->with('status','singleproduct$singleproduct Deleted Successfully');
        $singleproduct->is_active = 0; // Set is_active to 0, but don't delete the document
        $singleproduct->save(); // Save the changes
        return redirect()->back()->with('status', 'singleproduct ' . $singleproduct->name . ' Deactivated Successfully');
    }
//=================End-delete=================
}
