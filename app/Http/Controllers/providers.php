<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
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
      } elseif (Auth::user()->subscribtion=="staff") {
      return redirect('/staff');
    }elseif (Auth::user()->subscribtion=="admin") {
        return redirect('/admin');
    }elseif (Auth::user()->subscribtion=="noo") {
          return redirect('/home');
      }else {
        $account = DB::table('accounts')->where('email', '=', Auth::user()->email)->get();
        return view('d_page.main',['account'=>$account]);
      }

    }


}
