<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class providers extends Controller
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

    public function index(){
      if (Auth::user()->subscribtion=="seeker") {
        return redirect('/home');
      } else {
        return view('d_page.main');
      }

    }

    
}
