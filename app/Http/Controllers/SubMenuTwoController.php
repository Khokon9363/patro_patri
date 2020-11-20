<?php

namespace App\Http\Controllers;

use App\SubMenuTwo;
use Illuminate\Http\Request;

class SubMenuTwoController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        $sub_menus_two = SubMenuTwo::orderBy('id','DESC')->get();
        return view('admin.manage_submenu_two',compact('sub_menus_two'));
    }
}
