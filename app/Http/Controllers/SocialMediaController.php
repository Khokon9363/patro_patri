<?php

namespace App\Http\Controllers;

use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        if($request->id === null){
            $socialMedia             = new SocialMedia();
            $socialMedia->facebook   = $request->facebook;
            $socialMedia->youtube    = $request->youtube;
            $socialMedia->twitter    = $request->twitter;
            $socialMedia->instragram = $request->instragram;
            $socialMedia->linkedin   = $request->linkedin;
            $socialMedia->save();

            \Toastr::success('Social media links Saved successfully','Success');
            return redirect()->back();
        }else{
            $socialMedia             = SocialMedia::find($request->id);
            $socialMedia->facebook   = $request->facebook;
            $socialMedia->youtube    = $request->youtube;
            $socialMedia->twitter    = $request->twitter;
            $socialMedia->instragram = $request->instragram;
            $socialMedia->linkedin   = $request->linkedin;
            $socialMedia->save();

            \Toastr::success('Social media links updated successfully','Success');
            return redirect()->back();
        }
    }
    
    public function show(SocialMedia $socialMedia)
    {   
        $social_media = SocialMedia::first();
        return view('admin.manage_social',compact('social_media'));
    }

}
