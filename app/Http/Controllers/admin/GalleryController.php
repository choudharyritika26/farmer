<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    // public function gallery(){
    //     return view('admin.gallery');
    // }

    public function create(){
        return view ('admin.gallery.form');
       }

       public function store(Request $request){

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('gallery'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            //'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'image'=> 'required|image',
           
        ]);
        
        $gallery = new Gallery;
        $gallery->heading = $request->input('heading');
        $gallery->description = $request->input('description');
        // $gallery->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $gallery->image = $filename;
        }
        $gallery->save();
      // dd($gallery);
      //return redirect()->route('gallery-index');
        // return redirect()->route('');
        return response()->json([
            'message' => 'Product Add Successfully',
            'redirect_url' => route('gallery-index'),
        ]);
         }


    //==============index page===================
        public function index(){
            $gallery = Gallery::where('is_active',1)->get();
            return view('admin.gallery.index',compact('gallery'));
        }  

        //========================update=====================
    public function edit($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->heading = $request->input('heading');
        $gallery->description = $request->input('description');
        //$gallery->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $gallery->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/gallery/' . $gallery->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/gallery', $imageName);
    
        //     // Update the gallery model with the new image path
        //     $gallery->image = $imageName;
        // }
    
        $gallery->update();
        //return redirect()->route('gallery-index');
        return response()->json([
            'message' => 'Product Edit Successfully',
            'redirect_url' => route('gallery-index'),
        ]);
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        // $gallery->delete();
        // return redirect()->back()->with('status','gallery$gallery Deleted Successfully');
        $gallery->is_active = 0; // Set is_active to 0, but don't delete the document
        $gallery->save(); // Save the changes
        return redirect()->back()->with('status', 'gallery ' . $gallery->name . ' Deactivated Successfully');
    }
//=================End-delete=================
}

