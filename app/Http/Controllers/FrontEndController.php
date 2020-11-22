<?php

namespace App\Http\Controllers;

use App\Slider;
use App\SocialMedia;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function frontEnd()
    {   
        $social = SocialMedia::first();
        $sliders = Slider::all();
        return view('frontEnd.front',compact('social','sliders'));
    }
    public function register()
    {   
        $social = SocialMedia::first();
        return view('frontEnd.register',compact('social'));
    }
    public function login()
    {   
        $social = SocialMedia::first();
        return view('frontEnd.login',compact('social'));
    }
}
