<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;

class seekersController extends Controller
{
    public function message(){
      return view('s_page.message');
    }
    public function msg_sent(){
      return view('s_page.msg_sent');
    }
    public function msg_trash(){

      return view('s_page.msg_trash');
    }
    public function msg_compose(){
      return view('s_page.msg_compose');
    }
    public function provisers(){
      $providers = DB::table('providers')->inRandomOrder()->paginate(12);
      return view('s_page.s_providers',['providers'=>$providers]);
    }
    public function view_provider(Request $request){
      $this->Validate($request, [
         'id'=> 'string'
       ]);
       $id = $request->get('id');
      $provid = DB::table('providers')->where('users_id', '=', $id)->get();
      if (count($provid)>0) {
      return view('s_page.provider_detail',['details'=>$provid]);
      } else {
      return redirect('/load_provider');
      }

    }
    public function prescriptions(){
      return view('s_page.s_prescription');
    }
    public function transac_hys(){
      $sub_hys = DB::table('subcription_hys')->where('email', '=', Auth::user()->email)->latest()->paginate(10);
      return view('s_page.transac_hys', ['sub_hys'=>$sub_hys]);
    }
    public function booking(Request $request){
      return $request;
    }
}
