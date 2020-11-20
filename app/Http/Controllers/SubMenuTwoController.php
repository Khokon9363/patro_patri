<?php

namespace App\Http\Controllers;

use App\SubMenu;
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
        $subMenu = SubMenu::all();
        $subMenusTwo = SubMenuTwo::with('subMenu')->orderBy('id','DESC')->get();
        return view('admin.manage_submenu_two',compact('subMenusTwo','subMenu'));
    }
    public function store(Request $request)
    {
        $subMenuTwo = new SubMenuTwo();
        $subMenuTwo->sub_menu_two = $request->sub_menu_two;
        $subMenuTwo->sub_menu_id = $request->sub_menu_id;
        $subMenuTwo->save();

        \Toastr::success('Second Sub menu created successfully','Success');
        return redirect()->back();
    }
    public function destroy($id)
    {
        SubMenuTwo::destroy($id);

        \Toastr::warning('Second Sub menu deleted successfully','Success');
        return redirect()->back();
    }
}
