<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
        // public function product(){
    //     return view('admin.product');
    // }

    public function create(){
        return view ('admin.product.form');
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('product'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'required|image',
           
        ]);
        
        $product = new Product;
        $product->heading = $request->input('heading');
        $product->description = $request->input('description');
        $product->is_active = 1;
        // $product->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $product->image = $filename;
        }
        $product->save();
      // dd($product);
      //return redirect()->route('product-index');
        // return redirect()->route('');
         
         return response()->json([
            'message' => 'Product Add Successfully',
            'redirect_url' => route('product-index'),
        ]);
    }


    //==============index page===================
        public function index(){
           // $product = Product::all();
            $product = Product::where('is_active',1)->get();
            return view('admin.product.index',compact('product'));
        }  

        //========================update=====================
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->heading = $request->input('heading');
        $product->description = $request->input('description');
        //$product->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $product->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/product/' . $product->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/product', $imageName);
    
        //     // Update the product model with the new image path
        //     $product->image = $imageName;
        // }
    
        $product->update();
        return response()->json([
            'message' => 'Product Edit Successfully',
            'redirect_url' => route('product-index'),
        ]);
      //  return redirect()->route('product-index');

    }
        
        
        //=================delete=================
    // public function destroy($id)
    // {
    //     $product = Product::find($id);
    //     $product->is_active = 0;
    //     $product->delete();
    //     return redirect()->back()->with('status','product$product Deleted Successfully');
    // }
    public function destroy($id)
    {
        $product = Product::find($id);
        // $product->delete();
        $product->is_active = 0; // Set is_active to 0, but don't delete the document
        $product->save(); // Save the changes
       // return redirect()->back()->with('status','product $product Deleted Successfully');
       return redirect()->route('product-index');
    }
//=================End-delete=================
}
