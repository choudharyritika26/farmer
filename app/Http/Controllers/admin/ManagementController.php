<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management;
use App\Models\AboutUsList;

class ManagementController extends Controller
{
    public function create(){
        $aboutuslist = AboutUsList::where('is_active',1)->get();
        return view ('admin.management.form',compact('aboutuslist'));  
       }

       public function store(Request $request){
        $validatedData = $request->validate([
            'aboutuslist' => 'required',
            //'heading' => 'required',
            'description' => 'required',
            //'image'=> 'required|mimes:jpeg,jpg,png,gif|max:10000',
            //'image'=> 'required|image',
           
        ]);
        
        $management = new Management;
        $management->aboutuslist = $request->input('aboutuslist');
        $management->heading = $request->input('heading');
        $management->description = $request->input('description');
        $management->is_active = 1;
        // $management->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $management->image = $filename;
        }
        $management->save();
         return response()->json([
            'message' => 'management Add Successfully',
            'redirect_url' => route('management-index'),
        ]);
    }


    //==============index page===================
        public function index(){
           // $management = management::all();
            $management =Management::where('is_active',1)->get();
            return view('admin.management.index',compact('management'));         
        }  

        //========================update=====================
    public function edit($id){
        $aboutuslist = AboutUsList::where('is_active',1)->get();
        $management = Management::find($id);
        return view('admin.management.edit', compact('management','aboutuslist'));
    }

    public function update(Request $request, $id)
    {
        $management = Management::find($id);
        $management-> aboutuslist = $request->input('aboutuslist');
        $management->heading = $request->input('heading');
        $management->description = $request->input('description');
        //$management->image = $request->input('image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('storage/', $filename);
            $management->image = $filename;
        }
        $management->update();
        return response()->json([
            'message' => 'management Edit Successfully',
            'redirect_url' => route('management-index'),
        ]);
      //  return redirect()->route('management-index');

    }
    public function destroy($id)
    {
        $management = Management::find($id);
        // $management->delete();
        $management->is_active = 0; // Set is_active to 0, but don't delete the document
        $management->save(); // Save the changes
       // return redirect()->back()->with('status','management $management Deleted Successfully');
       return redirect()->route('management-index');
    }
//=================End-delete=================

}
