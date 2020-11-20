<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(Request $request)
    {   
        $testimonials = Testimonial::orderBy('id','DESC')->get();
        return view('admin.manage_testimonials',compact('testimonials'));
    }
}
