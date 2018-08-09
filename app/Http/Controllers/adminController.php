<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
  public function loging(Request $request){
    $this->Validate($request, [
       'email'=> 'required|string|email|max:255',
       'password'=>'required|string|min:8'
     ]);
    $user=DB::table('users')->where('email', '=', $request->input('email'))->get();
    if (count($user)>0) {
      if ($user[0]->subscribtion=="staff"&&$user[0]->activation=="staff") {
        if (!auth()->attempt(request(['email','password']))){
          return view('admin.login')->with('logf','Users email or password incorrate');
          exit();
        }
        return redirect('/staff/dashboard');
      } else {
        return redirect('/');
      }
    }return view('admin.login')->with('logf','Users email or password incorrate');


  }


}
