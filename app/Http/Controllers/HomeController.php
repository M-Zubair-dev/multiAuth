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
        return view('user.home');
    }
    public function login()
   {
        if (Auth::user()->role->id == 1){
            return Redirect()->route('admin.dashboard');
            // return view('admin.admin_layouts');
        }elseif (Auth::user()->role->id == 2){
           // return view('layouts.app');
			return Redirect()->route('user.dashboard');
        }else{
            null;
        }

    }

}
