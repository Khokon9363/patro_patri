<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubMenu;
use App\User;
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
            if($request->password === ''){
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
}
