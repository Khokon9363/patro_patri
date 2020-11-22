<?php

namespace App\Http\Controllers;

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
}
