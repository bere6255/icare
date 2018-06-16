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
        $acc_hys = DB::table('account_hys')->where('email', '=', Auth::user()->email)->latest()->limit(5)->get();
        return view('d_page.main',['account'=>$account,'acc_hys'=>$acc_hys]);
      }

    }

    public function transac_hys(){
            $acc_hys = DB::table('account_hys')->where('email', '=', Auth::user()->email)->latest()->paginate(10);
            return view('d_page.account_hys',['acc_hys'=>$acc_hys]);
    }

    public function seekers_req(){

    }

    public function prescrib(){

    }

}
