<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class other extends Controller
{
  public function activate(Request $request){
    $mail = $request->get('hp');
    $key = $request->get('dell');
    $act_play = DB::table('users')->where('email', '=', $mail)->where('activation', '=', $key)->get();
    if (count($act_play)>0) {
      DB::table('users')->where('email', '=', $mail)->update(['activation' => "activated"]);
      return redirect('home');
    } else {
      return redirect('/');
    }

  }
}
