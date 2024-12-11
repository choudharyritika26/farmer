<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsList;

class AboutUsListController extends Controller
{
         // public function aboutuslist(){
    //     return view('admin.aboutuslist');
    // }

    public function create(){
        return view ('admin.aboutuslist.form');
       }

       public function store(Request $request){
       // dd('sn');

        //dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension();
        // $request->image->move(public_path('aboutuslist'),$imageName);
        //dd($imageName);

        $validatedData = $request->validate([
            'heading' => 'required',
            //'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'required|image',
           
        ]);
        
        $aboutuslist = new AboutUsList;
        $aboutuslist->heading = $request->input('heading');
        //$aboutuslist->description = $request->input('description');
        // $aboutuslist->image = $request->input('image');
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('storage/', $filename);
        //     $aboutuslist->image = $filename;
        // }
        $aboutuslist->save();
      // dd($aboutuslist);
      //return redirect()->route('aboutuslist-index');
        // return redirect()->route('');
         
         return response()->json([
            'message' => 'aboutuslist Add Successfully',
            'redirect_url' => route('aboutuslist-index'),
        ]);
    }


    //==============index page===================
        public function index(){
            $aboutuslist = AboutUsList::where('is_active',1)->get();
            //$aboutuslist = AboutUsList::all();
            return view('admin.aboutuslist.index',compact('aboutuslist'));
        }  

        //========================update=====================
    public function edit($id){
        $aboutuslist = AboutUsList::find($id);
        return view('admin.aboutuslist.edit', compact('aboutuslist'));
    }

    public function update(Request $request, $id)
    {
        $aboutuslist = AboutUsList::find($id);
        $aboutuslist->heading = $request->input('heading');
        $aboutuslist->description = $request->input('description');
        //$aboutuslist->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $aboutuslist->image = $filename;
        }
        // if ($request->hasFile('image')) {
        //     // Delete the old image
        //     Storage::delete('public/aboutuslist/' . $aboutuslist->image);
    
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/aboutuslist', $imageName);
    
        //     // Update the aboutuslist model with the new image path
        //     $aboutuslist->image = $imageName;
        // }
    
        $aboutuslist->update();
        return response()->json([
            'message' => 'our product list Edit Successfully',
            'redirect_url' => route('aboutuslist-index'),
        ]);
        
      //  return redirect()->route('aboutuslist-index');

    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        // $aboutuslist = aboutuslist::find($id);
        // $aboutuslist->delete();
        // return redirect()->back()->with('status','aboutuslist$aboutuslist Deleted Successfully');
        
        $aboutuslist =  AboutUsList::find($id);
        $aboutuslist->is_active = 0; // Set is_active to 0, but don't delete the document
        $aboutuslist->save(); // Save the changes
        return redirect()->back()->with('status', 'aboutuslist ' . $aboutuslist->name . ' Deactivated Successfully');
    
    }
//=================End-delete=================

}
