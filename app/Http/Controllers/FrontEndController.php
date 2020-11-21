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
}
