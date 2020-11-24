<?php

namespace App\Http\Controllers;

use App\About;
use App\GroomSolution;
use App\Offer;
use App\Privacy;
use App\Service;
use App\Solution;
use App\SubMenu;
use App\SubMenuTwo;
use App\Term;
use App\User;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile')->with('auth_user',Auth::user());
    }

    public function services()
    {
        $serviceMenu = SubMenu::where('main_menu_id', 4)->get();
        $serviceList = Service::with('subMenuService')->get();
        return view('admin.services.index', compact('serviceMenu', 'serviceList'));
    }

    public function serviceDelete(Service $service)
    {
        $service->delete();
        \Toastr::success('Service Delete successfully','Success');
        return redirect()->back();
    }

    public function serviceStore(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        $fileName = time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $fileName);

        $service = Service::create([
            'service_id' => $request->service_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
        ]);
        \Toastr::success('Service inserted successfully','Success');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        if($request->password === $request->password_confirmation){
            if($request->password === null){
                 $user = User::find(Auth::user()->id);
                 $user->name = $request->name;
                 $user->email = $request->email;
                 $user->save();
                 \Toastr::success('Profile updated successfully without password','Success');
                 return redirect()->back();
            }else{
                 $user = User::find(Auth::user()->id);
                 $user->name = $request->name;
                 $user->email = $request->email;
                 $user->password = bcrypt($request->password);
                 $user->save();
                 \Toastr::success('Profile updated successfully with password','Success');
                 return redirect()->back();
            }
        }else{
            \Toastr::warning('Password and Confirm Password does not match','Success');
            return redirect()->back();
        }
    }
    public function offers(){
        $offerMenu = SubMenu::where('main_menu_id', 6)->get();
        $offerList = Offer::with('subMenuOffer')->get();
        return view('admin.offers.index', compact('offerMenu', 'offerList'));
    }
    public function offerStore(Request $request){
        $request->validate([
            'offer_id' => 'required',
            'title'    => 'required',
            'description' => 'required',
            'image'       => 'required'
        ]);
        $fileName = time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $fileName);

        $offer = new Offer();
        $offer->offer_id = $request->offer_id;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->image = $fileName;
        $offer->save();
        \Toastr::success('Offer saved successfully','Success');
        return redirect()->back();
    }
    public function offerDelete($id){
        Offer::destroy($id);
        \Toastr::success('Offer deleted successfully','Success');
        return redirect()->back();
    }
    public function brideGallery()
    {
        $gallery = SubMenuTwo::where('sub_menu_id',2)->get();
        $galleryList = Solution::with('SubMenuTwoGallery')->where('role',1)->get();
        return view('admin.solutions.bride',compact('gallery','galleryList'));
    }
    public function brideStore(Request $request)
    {
        $request->validate([
            'sub_menu_two_id' => 'required',
            'title'    => 'required',
            'description' => 'required',
            'image'       => 'required'
        ]);
        $fileName = time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $fileName);

        $offer = new Solution();
        $offer->sub_menu_two_id = $request->sub_menu_two_id;
        $offer->title = $request->title;
        $offer->role = $request->role;
        $offer->description = $request->description;
        $offer->image = $fileName;
        $offer->save();
        \Toastr::success('Bride solution saved successfully','Success');
        return redirect()->back();
    }
    public function brideDelete($id)
    {
        Solution::destroy($id);
        \Toastr::success('Solution deleted successfully','Success');
        return redirect()->back();
    }
    public function groomGallery()
    {
        $gallery = SubMenuTwo::where('sub_menu_id',1)->get();
        $galleryList = Solution::with('SubMenuTwoGallery')->where('role',0)->get();
        return view('admin.solutions.groom',compact('gallery','galleryList'));
    }
    public function groomStore(Request $request)
    {
        $request->validate([
            'sub_menu_two_id' => 'required',
            'title'    => 'required',
            'description' => 'required',
            'image'       => 'required'
        ]);
        $fileName = time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $fileName);

        $offer = new Solution();
        $offer->sub_menu_two_id = $request->sub_menu_two_id;
        $offer->title = $request->title;
        $offer->role = $request->role;
        $offer->description = $request->description;
        $offer->image = $fileName;
        $offer->save();
        \Toastr::success('Groom solution saved successfully','Success');
        return redirect()->back();
    }
    public function groomDelete($id)
    {
        Solution::destroy($id);
        \Toastr::success('Solution deleted successfully','Success');
        return redirect()->back();
    }
    public function about()
    {
        if(About::first()){
            $about = About::first();
            return view('admin.about_terms.about',compact('about'));
        }
        return view('admin.about_terms.about');
    }
    public function terms()
    {
        if(Term::first()){
            $term = Term::first();
            return view('admin.about_terms.terms',compact('term'));
        }
        return view('admin.about_terms.terms');
    }
    public function aboutStore(Request $request)
    {
        if(About::first()){
            $about = About::first();
            $about->bold_text = $request->bold_text;
            $about->normal_text = $request->normal_text;
            $about->intention = $request->intention;
            $about->vision = $request->vision;
            $about->mission = $request->mission;
            $about->keep_going = $request->keep_going;
            $about->save();
            \Toastr::success('About Updated Successfully','Success');
            return redirect()->back();
        }else{
            $about = new About();
            $about->bold_text = $request->bold_text;
            $about->normal_text = $request->normal_text;
            $about->intention = $request->intention;
            $about->vision = $request->vision;
            $about->mission = $request->mission;
            $about->keep_going = $request->keep_going;
            $about->save();
            \Toastr::success('About Saved Successfully','Success');
            return redirect()->back();
        }
    }
    public function termStore(Request $request)
    {
        if(Term::first()){
            $term = Term::first();
            $term->one = $request->one;
            $term->two = $request->two;
            $term->three = $request->three;
            $term->four = $request->four;
            $term->five = $request->five;
            $term->six = $request->six;
            $term->seven = $request->seven;
            $term->eight = $request->eight;
            $term->nine = $request->nine;
            $term->ten = $request->ten;
            $term->eleven = $request->eleven;
            $term->twelve = $request->twelve;
            $term->thirteen = $request->thirteen;
            $term->fourteen = $request->fourteen;
            $term->fifteen = $request->fifteen;
            $term->sixteen = $request->sixteen;
            $term->seventeen = $request->seventeen;
            $term->eighteen = $request->eighteen;
            $term->nineteen = $request->nineteen;
            $term->save();
            \Toastr::success('Terms & Conditions Updated Successfully','Success');
            return redirect()->back();
        }else{
            $term = new Term();
            $term->one = $request->one;
            $term->two = $request->two;
            $term->three = $request->three;
            $term->four = $request->four;
            $term->five = $request->five;
            $term->six = $request->six;
            $term->seven = $request->seven;
            $term->eight = $request->eight;
            $term->nine = $request->nine;
            $term->ten = $request->ten;
            $term->eleven = $request->eleven;
            $term->twelve = $request->twelve;
            $term->thirteen = $request->thirteen;
            $term->fourteen = $request->fourteen;
            $term->fifteen = $request->fifteen;
            $term->sixteen = $request->sixteen;
            $term->seventeen = $request->seventeen;
            $term->eighteen = $request->eighteen;
            $term->nineteen = $request->nineteen;
            $term->save();
            \Toastr::success('Terms & Conditions Saved Successfully','Success');
            return redirect()->back();
        }
    }
    public function privacy()
    {
        if(Privacy::first()){
            $privacy = Privacy::first();
            return view('admin.about_terms.privacy',compact('privacy'));
        }
        return view('admin.about_terms.privacy');
    }
    public function privacyStore(Request $request)
    {
        if(Privacy::first()){
            $term = Privacy::first();
            $term->one = $request->one;
            $term->two = $request->two;
            $term->three = $request->three;
            $term->four = $request->four;
            $term->five = $request->five;
            $term->six = $request->six;
            $term->seven = $request->seven;
            $term->eight = $request->eight;
            $term->nine = $request->nine;
            $term->ten = $request->ten;
            $term->eleven = $request->eleven;
            $term->twelve = $request->twelve;
            $term->thirteen = $request->thirteen;
            $term->fourteen = $request->fourteen;
            $term->fifteen = $request->fifteen;
            $term->sixteen = $request->sixteen;
            $term->seventeen = $request->seventeen;
            $term->save();
            \Toastr::success('Privacy Updated Successfully','Success');
            return redirect()->back();
        }else{
            $term = new Privacy();
            $term->one = $request->one;
            $term->two = $request->two;
            $term->three = $request->three;
            $term->four = $request->four;
            $term->five = $request->five;
            $term->six = $request->six;
            $term->seven = $request->seven;
            $term->eight = $request->eight;
            $term->nine = $request->nine;
            $term->ten = $request->ten;
            $term->eleven = $request->eleven;
            $term->twelve = $request->twelve;
            $term->thirteen = $request->thirteen;
            $term->fourteen = $request->fourteen;
            $term->fifteen = $request->fifteen;
            $term->sixteen = $request->sixteen;
            $term->seventeen = $request->seventeen;
            $term->save();
            \Toastr::success('Privacy Saved Successfully','Success');
            return redirect()->back();
        }
    }
}
