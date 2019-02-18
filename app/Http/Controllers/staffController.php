<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use App\providers;
use Illuminate\Http\Request;

class staffController extends Controller
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

      if (Auth::check()) {
        if (Auth::user()->activation=="staff"&&Auth::user()->subscribtion=="staff") {
          return view('admin.landing');
        } else {return redirect('/home');
        }} else {  return redirect('/home');
      }


    }
    public function view_provider(){
      $provider = DB::table('providers')->paginate(10);
      return view('admin.providers',['provider'=>$provider]);
    }
    public function view_seeker(){
      $seekers = DB::table('seekers_details')->paginate(10);
      return view('admin.seekers',['seekers'=>$seekers]);
    }
    public function blog(){
      //$seekers = DB::table('seekers_details')->paginate(10);
      return view('admin.blog');
    }


}
