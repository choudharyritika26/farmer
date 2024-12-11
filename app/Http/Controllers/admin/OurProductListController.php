<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurProductList;

class OurProductListController extends Controller
{
      // public function ourproductlist(){
    //     return view('admin.ourproductlist');
    // }

    public function create(){
        return view ('admin.ourproductlist.form');
       }

       public function store(Request $request){
       // dd('sn');

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('ourproductlist'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'required|image',
           
        ]);
        
        $ourproductlist = new OurProductList;
        $ourproductlist->heading = $request->input('heading');
        //$ourproductlist->description = $request->input('description');
        // $ourproductlist->image = $request->input('image');
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('storage/', $filename);
        //     $ourproductlist->image = $filename;
        // }
        $ourproductlist->save();
      // dd($ourproductlist);
      //return redirect()->route('ourproductlist-index');
        // return redirect()->route('');
         
         return response()->json([
            'message' => 'ourproductlist Add Successfully',
            'redirect_url' => route('ourproductlist-index'),
        ]);
    }


    //==============index page===================
        public function index(){
            $ourproductlist = OurProductList::where('is_active',1)->get();
            $ourproductlist = OurProductList::all();
            return view('admin.ourproductlist.index',compact('ourproductlist'));
        }  

        //========================update=====================
    public function edit($id){
        $ourproductlist = OurProductList::find($id);
        return view('admin.ourproductlist.edit', compact('ourproductlist'));
    }

    public function update(Request $request, $id)
    {
        $ourproductlist = OurProductList::find($id);
        $ourproductlist->heading = $request->input('heading');
        $ourproductlist->description = $request->input('description');
        //$ourproductlist->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $ourproductlist->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/ourproductlist/' . $ourproductlist->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/ourproductlist', $imageName);
    
        //     // Update the ourproductlist model with the new image path
        //     $ourproductlist->image = $imageName;
        // }
    
        $ourproductlist->update();
        return response()->json([
            'message' => 'our product list Edit Successfully',
            'redirect_url' => route('ourproductlist-index'),
        ]);
        
      //  return redirect()->route('ourproductlist-index');

    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        // $ourproductlist = OurProductList::find($id);
        // $ourproductlist->delete();
        // return redirect()->back()->with('status','ourproductlist$ourproductlist Deleted Successfully');
        
        $ourproductlist =  OurProductList::find($id);
        $ourproductlist->is_active = 0; // Set is_active to 0, but don't delete the document
        $ourproductlist->save(); // Save the changes
        return redirect()->back()->with('status', 'ourproductlist ' . $ourproductlist->name . ' Deactivated Successfully');
    
    }
//=================End-delete=================

}
