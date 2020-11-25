<?php

namespace App\Http\Controllers;

use App\About;
use App\MainMenu;
use App\Offer;
use App\Privacy;
use App\Service;
use App\Slider;
use App\SocialMedia;
use App\Solution;
use App\SubMenu;
use App\Term;
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
        $groomSolutions = Solution::where('role',0)->get();
        $brideSolutions = Solution::where('role',1)->get();
        return view('frontEnd.front',compact(
            'social',
            'sliders',
            'menus',
            'galleryMenus',
            'firstMenus',
            'services',
            'groomSolutions',
            'brideSolutions'));
    }
    public function register()
    {
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.register.register',compact('social','firstMenus','menus','galleryMenus'));
    }
    public function login()
    {
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.login',compact('social','firstMenus','menus','galleryMenus'));
    }
    public function serviceDetails($id)
    {
        $service = Service::find($id);
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.service_details',compact('service','social','firstMenus','menus','galleryMenus'));
    }
    public function servicesDetails($id)
    {
        $services = Service::where('service_id',$id)->get();
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.services_details',compact('services','social','firstMenus','menus','galleryMenus'));
    }
    public function about()
    {
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        $about = About::all();
        return view('frontEnd.about',compact('about','social','firstMenus','menus','galleryMenus'));
    }
    public function offersDetails($id)
    {
        $offers = Offer::where('offer_id',$id)->get();
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.offers_details',compact('offers','social','firstMenus','menus','galleryMenus'));
    }
    public function solutionsDetails($id)
    {
        $solutions = Solution::where('sub_menu_two_id',$id)->get();
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.solutions_details',compact('solutions','social','firstMenus','menus','galleryMenus'));

    }
    public function solutionDetails($id)
    {
        $solution = Solution::find($id);
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        return view('frontEnd.solution_details',compact('solution','social','firstMenus','menus','galleryMenus'));

    }
    public function terms()
    {
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        $term = Term::all();
        return view('frontEnd.terms',compact('term','social','firstMenus','menus','galleryMenus'));
    }
    public function privacy()
    {
        $social = SocialMedia::first();
        $firstMenus = MainMenu::skip(0)->take(2)->get();
        $menus = MainMenu::with('subMenu')->skip(3)->take(3)->get();
        $galleryMenus = MainMenu::with('subMenu')->skip(2)->take(1)->get();
        $privacy = Privacy::all();
        return view('frontEnd.privacy',compact('privacy','social','firstMenus','menus','galleryMenus'));
    }
}
