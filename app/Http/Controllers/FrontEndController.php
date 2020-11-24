<?php

namespace App\Http\Controllers;

use App\MainMenu;
use App\Service;
use App\Slider;
use App\SocialMedia;
use App\SubMenu;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function frontEnd()
    {
        $social = SocialMedia::first();
        $sliders = Slider::all();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        $services = Service::all();
        return view('frontEnd.front',compact(
            'social',
            'sliders',
            'menus',
            'galleryMenus',
            'firstMenus',
            'services'));
    }
}
