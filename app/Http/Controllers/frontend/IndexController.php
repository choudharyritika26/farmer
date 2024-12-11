<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Gallery;
use App\Models\ContactUsDetales;
use App\Models\Services;
use App\Models\OurProductList;
use App\Models\ServicesDiscription;
use App\Models\AboutUsList;
use App\Models\Product;
use App\Models\Singleproduct;
use App\Models\Management;

class IndexController extends Controller
{
    public function index()
    {
        $about = About::where('is_active',1)->get();
        $slider = Slider::where('is_active',1)->get();
        $gallery = Gallery::where('is_active',1)->get();
        $services = Services::where('is_active',1)->get();
        $services_discriptions= ServicesDiscription::where('is_active',1)->get();
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $management =Management::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();     
        $product = Product::where('is_active',1)->get(); 
       // $management =Management::where('is_active',1)->get();
        return view('frontend.index',compact('slider','about', 'gallery','contact_us_detales' , 'services', 'our_product_lists','services_discriptions','about_us_lists', 'product','management'));
    }

    public function about()
    {
        $about = About::where('is_active',1)->get();
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        return view('frontend.about',compact('about','contact_us_detales','our_product_lists','about_us_lists'));
    }

    public function product()
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        $product = Product::where('is_active',1)->get();
        return view('frontend.product',compact('contact_us_detales' ,'our_product_lists','about_us_lists', 'product'));
    }

    
    public function singleproduct()
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        return view('frontend.singleproduct',compact('contact_us_detales' ,'our_product_lists','about_us_lists'));
    }

    public function singleproductpage($id)
    {
        //dd($id);
        $our_product = OurProductList::where('id',$id)->first();   
       // dd($our_product);
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $singleproducts = Singleproduct::where('is_active',1)->where('product',$id)->get(); 
        //dd($singleproducts);  
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        return view('frontend.singleproductpage',compact('contact_us_detales' ,'our_product_lists','our_product','about_us_lists','singleproducts'));
    }

    public function gallery()
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        $gallery = Gallery::where('is_active',1)->get();
        return view('frontend.gallery',compact('gallery','contact_us_detales' ,'our_product_lists','about_us_lists'));
    }

    public function services()
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $services = Services::where('is_active',1)->get();
        $services_discriptions = ServicesDiscription::where('is_active',1)->get();
       // dd($services_discriptions);
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        return view('frontend.services',compact('services','contact_us_detales' ,'our_product_lists','about_us_lists','services_discriptions'));
    }

    public function contact()
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList:: where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();
        return view('frontend.contact',compact('contact_us_detales' ,'our_product_lists','about_us_lists'));
    }
    
    public function management($id)
    {
        $our_product_lists = OurProductList::where('is_active',1)->get();
        $about_us_lists = AboutUsList::where('is_active',1)->get();
        $manage = AboutUsList::where('id',$id)->first();
        $contact_us_detales = contactusdetales ::where('is_active',1)->get();  
        $management = Management::where('is_active',1)->where('aboutuslist',$id)->get();   
        //$management =Management::where('id',$id)->first();
        //dd($management);
       $our_product = OurProductList::where('id',$id)->first();   
        return view('frontend.management',compact('contact_us_detales' ,'our_product_lists','about_us_lists','management','manage'));
    }
}
