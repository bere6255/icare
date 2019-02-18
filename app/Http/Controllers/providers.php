<?php

namespace App\Http\Controllers;
use Auth;
use App\mgs;
use App\country;
use App\prescription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
      } elseif (Auth::user()->activation=="staff"&&Auth::user()->subscribtion=="staff") {
      return redirect('/staff/dashboard');
    }elseif (Auth::user()->subscribtion=="admin") {
        return redirect('/admin');
    }elseif (Auth::user()->subscribtion=="noo") {
          return redirect('/home');
      }else {
        $account = DB::table('accounts')->where('email', '=', Auth::user()->email)->get();
        $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
        $acc_hys = DB::table('account_hys')->where('email', '=', Auth::user()->email)->latest()->limit(5)->get();
        $booking = DB::table('bookings')->where('provider', '=', Auth::user()->email)->latest()->limit(5)->get();
        return view('d_page.main',['account'=>$account,'acc_hys'=>$acc_hys,'booking'=>$booking,'provider'=>$provider]);
      }

    }

    public function transac_hys(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
            $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
            $acc_hys = DB::table('account_hys')->where('email', '=', Auth::user()->email)->latest()->paginate(10);
            return view('d_page.account_hys',['acc_hys'=>$acc_hys,'provider'=>$provider]);
    }

    public function view_booking(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      $booking = DB::table('bookings')->where('provider', '=', Auth::user()->email)->latest()->paginate(10);
      return view('d_page.bookings',['booking'=>$booking,'provider'=>$provider]);
    }
    public function post_prescrib(Request $request){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $this->Validate($request, [
         'booking_id'=> 'string',
         'exam'=>'string',
         'comment'=>'string'
       ]);
      $img_name1= "prescrib_".md5("bereobong").".jpg";
       if ($request->hasFile('file1')) {
         $request->file('file_1');
         $request->file_1->store('public',$img_name1);

       }
       $booking = DB::table('bookings')->where('request_ID', '=', $request->input('booking_id'))->get();
       $pre = new prescription;
       $pre->provider_email =Auth::user()->email;
       $pre->seeker_mail =$booking[0]->seeker;
       $pre->booking_id =$request->input('booking_id');
       $pre->examination =$request->input('exam');
       $pre->file_1 =$img_name1;
       $pre->comment =$request->input('comment');
       $pre->save();
       return back()->with('prescrib','Prescrib successful');

    }
    public function prescrib(Request $request){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $booking=$request->get('booking_id');
      if (!empty($booking)) {
        $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
        return view('d_page.prescribtion',['provider'=>$provider, 'booking'=>$booking]);
      }
      return redirect('/doctors_booking');
    }

    public function booking_accept(Request $request){
      $user= Auth::user();
      if (Auth::user()->subscribtion !="provider") {
        return redirect('/home');
      }

      $this->Validate($request, [
         'booking_id'=> 'string'
       ]);
       $booking_id=$request->input('booking_id');
      $check = DB::table('bookings')->where('request_ID', '=', $booking_id)->get();
      if (count($check)>0) {
        $sub =DB::table('subcriptions')->where('email', '=', $check[0]->seeker)->latest()->get();
        if ($sub[0]->unit>0) {
          if($check[0]->status=="processing"){
          $unit = $sub[0]->unit-1;
          DB::table('subcriptions')->where('email', '=', $check[0]->seeker)->update(['unit' => $unit]);
          $acc =DB::table('accounts')->where('email', '=', $user['email'])->latest()->get();
          $pote_bala = $acc[0]->poten_balance +400;
          DB::table('accounts')->where('email', '=', $user['email'])->update(['poten_balance' => $pote_bala]);
            DB::table('bookings')->where('request_ID', $booking_id)->update(['status' => "accepted"]);
          return back();
        }
        }
      }
      return back();

    }
    public function booking_reject(Request $request){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $this->Validate($request, [
         'booking_id'=> 'string'
       ]);
       $booking_id=$request->input('booking_id');
      $check = DB::table('bookings')->where('request_ID', '=', $booking_id)->get();
      if (count($check)>0) {
        if($check[0]->status=="processing"){
          DB::table('bookings')->where('request_ID', $booking_id)->update(['status' => "rejected"]);
        }
        return back();
      } else {
      return back();
      }
    }

    public function chat_room(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $user= Auth::user();
      $provider = DB::table('providers')->where('email', '=', $user['email'])->get();
      $booking = DB::table('bookings')->where('provider', '=', $user['email'])->where('status', '=', "accepted")->latest()->get();
      return view('d_page.chat_room',['reciever'=>$booking,'provider'=>$provider]);
    }

////working here


    public function viewseek(Request $request){
      $id = $request->get('ID');
      $booking = DB::table('bookings')->where('request_ID', '=', $id)->get();
      $s_pres = DB::table('prescriptions')->where('seeker_mail', '=', $booking[0]->seeker)->latest()->paginate(10);
      $s_detail = DB::table('seekers_details')->where('email', '=', $booking[0]->seeker)->get();
      $user= Auth::user();
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      return view('d_page.seekers_details',['provider'=>$provider,'s_pres'=>$s_pres,'s_details'=>$s_detail]);
    }
    public function update_profile(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $country = country::all();
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      return view('d_page.update_profile',['provider'=>$provider,'country'=>$country]);

    }
    public function post_profile(Request $request){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }$this->Validate($request, [
         'title'=> 'required|string',
         'spec'=>'required|string',
         'first_name'=> 'required|string',
         'last_name'=>'required|string',
         'phone'=> 'required|string',
         'address'=>'required|string',
         'MDCN'=>'required|string',
         'country'=> 'required|string',
         'state'=>'required|string',
         'about'=>'required|string'
       ]);
       $img_name= "provider_".md5("bereobong").".jpg";
       $mdcn_name= "mdcn_".md5("bereobong").".jpg";
        if ($request->hasFile('img')) {
          $request->file('img');
          $request->file('img')->storeAs('public',$img_name);
        }if ($request->hasFile('MDCN_L')) {
          $request->file('MDCN_L');
          $request->file('MDCN_L')->storeAs('public',$mdcn_name);
        }
        DB::table('providers')->where('email', '=', Auth::user()->email)->update(['title' => $request->input('title'),
        'specialty'=>$request->input('spec'),'first_name'=>$request->input('first_name'),'last_name'=>$request->input('last_name'),
        'phone'=>$request->input('phone'),'address'=>$request->input('address'),'mdcn'=>$request->input('MDCN'),
        'country'=>$request->input('country'),'state'=>$request->input('state'),'about'=>$request->input('about'),
        'mdcn_file'=>$mdcn_name,'img'=>$img_name]);
        return redirect('/d_profile');
    }
    public function profile(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      return view('d_page.profile',['provider'=>$provider]);
    }

}
