<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUsDetales;

class ContactUsDetalesController extends Controller
{
    public function create(){
        return view ('admin.contactusdetales.form');
       }

       public function store(Request $request){

        //dd($request->all());
       

        $validatedData = $request->validate([
            'address' => 'required',
            'email_id' => 'required',
            'phone_no'=> 'required',
           
        ]);
        
        $contactusdetales = new contactusdetales ;
        $contactusdetales->address = $request->input('address');
        $contactusdetales->email_id = $request->input('email_id');
        $contactusdetales->phone_no = $request->input('phone_no');
        $contactusdetales->save();
      // dd($contactusdetales);
       //return redirect()->route('contactusdetales-index');
        // return redirect()->route('');
        return response()->json([
            'message' => 'Contact Us Detales Add Successfully',
            'redirect_url' => route('contactusdetales-index'),
        ]);
         }


    //==============index page===================
        public function index(){
            $contactusdetales = contactusdetales ::where('is_active',1)->get();
            return view('admin.contactusdetales.index',compact('contactusdetales'));
        }  

        //========================update=====================
    public function edit($id){
        $contactusdetales = contactusdetales ::find($id);
       // dd($contactusdetales);
        return view('admin.contactusdetales.edit', compact('contactusdetales'));
    }

    public function update(Request $request, $id)
    {
        $contactusdetales = contactusdetales ::find($id);
        $contactusdetales->address = $request->input('address');
        $contactusdetales->email_id = $request->input('email_id');
        $contactusdetales->phone_no = $request->input('phone_no');

        $contactusdetales->update();
        //return redirect()->route('contactusdetales-index');
        return response()->json([
            'message' => 'Contact Us Detales Edit Successfully',
            'redirect_url' => route('contactusdetales-index'),
        ]);
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $contactusdetales = ContactUsDetales::find($id);
        // $contactusdetales->delete();
        // return redirect()->back()->with('status','contactusdetales$contactusdetales Deleted Successfully');
      
        $contactusdetales->is_active = 0; // Set is_active to 0, but don't delete the document
        $contactusdetales->save(); // Save the changes
        return redirect()->back()->with('status', 'contactusdetales ' . $contactusdetales->name . ' Deactivated Successfully');
    }
//=================End-delete=================
}
