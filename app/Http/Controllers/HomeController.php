<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function create_seeker(){
      $user=Auth::user();
      return view('s_page.pricing');
      // this is for creation of Seekers
    }

    public function create_provider(){
      $user=Auth::user();
      return $user;
      // this is for creating provider
    }
    public function seekers_dashboard(){
      return view('s_page.seekers_dashboard');
    }

}
