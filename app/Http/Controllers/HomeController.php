<?php

namespace App\Http\Controllers;

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

        }else{
            return redirect()->back()->with('error','Password and Confirm Password does not match');
        }
    }
}
