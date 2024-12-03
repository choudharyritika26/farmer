<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Gallery;
use App\Models\ContactUsDetales;


class IndexController extends Controller
{
    public function index()
    {
        $about = About::where('is_active',1)->get();
        $slider = Slider::all();
        $gallery = Gallery::all();
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.index',compact('slider','about', 'gallery','contact_us_detales'));
    }

    public function about()
    {
        $about = About::where('is_active',1)->get();
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.about',compact('about','contact_us_detales'));
    }

    public function product()
    {
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.product',compact('contact_us_detales'));
    }

    
    public function singleproduct()
    {
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.singleproduct',compact('contact_us_detales'));
    }

    public function gallery()
    {
        $contact_us_detales = contactusdetales ::all();
        $gallery = Gallery::all();
        return view('frontend.gallery',compact('gallery','contact_us_detales'));
    }

    public function services()
    {
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.services',compact('contact_us_detales'));
    }

    public function contact()
    {
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.contact',compact('contact_us_detales'));
    }
    
    public function management()
    {
        $contact_us_detales = contactusdetales ::all();
        return view('frontend.management',compact('contact_us_detales'));
    }
}
