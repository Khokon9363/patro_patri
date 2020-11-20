<?php

namespace App\Http\Controllers;

use App\MainMenu;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {   
        $main_menus = MainMenu::all();
        $sub_menus = SubMenu::with('mainMenu')->orderBy('id','DESC')->get();
        return view('admin.manage_submenu',compact('sub_menus','main_menus'));
    }
    public function store(Request $request)
    {
        $subMenu = new SubMenu();
        $subMenu->sub_menu = $request->sub_menu;
        $subMenu->main_menu_id = $request->main_menu_id;
        $subMenu->save();
        \Toastr::success('Sub menu saved successfully', 'success');
        return redirect()->back();
    }
}
