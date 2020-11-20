<?php

namespace App\Http\Controllers;

use App\MainMenu;
use Illuminate\Http\Request;

class MainMenuController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(Request $request)
    {   
        $main_menus = MainMenu::orderBy('id','DESC')->get();
        return view('admin.manage_mainmenu',compact('main_menus'));
    }
    public function update(Request $request)
    {
        $main_menu = MainMenu::find($request->id);
        $main_menu->main_menu = $request->main_menu;
        $main_menu->save();
        
        \Toastr::success('Selected menu updated successfully','Success');
        return redirect()->back();
    }
}