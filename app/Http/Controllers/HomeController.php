<?php

namespace App\Http\Controllers;

use App\GroomSolution;
use App\Offer;
use App\Service;
use App\Solution;
use App\SubMenu;
use App\SubMenuTwo;
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
}
