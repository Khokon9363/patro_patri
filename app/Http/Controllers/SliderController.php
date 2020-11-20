<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(Request $request)
    {   
        $sliders = Slider::orderBy('id','DESC')->get();
        return view('admin.manage_slider',compact('sliders'));
    }
    public function store(Request $request)
    {   
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
        $realName = $request->file('image')->getClientOriginalName();
        $rename   = time().'_patro-patri_'.$realName;
        $request->file('image')->move('sliders',$rename);

        $slider = new Slider();
        $slider->image = $rename;
        $slider->save();
        \Toastr::success('Slider Image uploaded successfully', 'success');
        return redirect()->back();
    }
    public function destroy($id)
    {
        Slider::destroy($id);
        \Toastr::warning('Slider image deleted successfully','Success');
        return redirect()->back();
    }
}
