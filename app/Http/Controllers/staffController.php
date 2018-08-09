<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

      //$provider =providers::all()
      return view('admin.landing');
    }
    public function view_provider(){
      $provider = DB::table('providers')->paginate(10);
      return view('admin.providers',['provider'=>$provider]);
    }
    public function view_seeker(){
      $seekers = DB::table('seekers_details')->paginate(10);
      return view('admin.seekers',['seekers'=>$seekers]);
    }


}
