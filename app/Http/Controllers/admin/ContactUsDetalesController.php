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
       return redirect()->route('contactusdetales-index');
        // return redirect()->route('');
         }


    //==============index page===================
        public function index(){
            $contactusdetales = contactusdetales ::all();
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
        return redirect()->route('contactusdetales-index');
    }
        
        
        //=================delete=================
    public function destroy($id)
    {
        $contactusdetales = ContactUsDetales::find($id);
        $contactusdetales->delete();
        return redirect()->back()->with('status','contactusdetales$contactusdetales Deleted Successfully');
    }
//=================End-delete=================
}
