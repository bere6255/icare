<?php

namespace App\Http\Controllers;
use Auth;
use App\mgs;
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

    public function prescrib(){
      if (Auth::user()->subscribtion!="provider") {
        return redirect('/home');
      }
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      return view('d_page.prescribtion',['provider'=>$provider]);
    }

    public function booking_accept(Request $request){
      $user= Auth::user();
      if (Auth::user()->subscribtion!="provider") {
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
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      return view('d_page.chat_room',['provider'=>$provider]);
    }
    public function compose(){
      $user= Auth::user();
      $provider = DB::table('providers')->where('email', '=', Auth::user()->email)->get();
      $booking = DB::table('bookings')->where('provider', '=', $user['email'])->where('status', '=', "accepted")->latest()->get();
      return view('d_page.message_compose',['reciever'=>$booking,'provider'=>$provider]);
    }
    public function send_mail(Request $request){
      $this->Validate($request, [
         'subject'=> 'string',
         'reciever'=>'string',
         'msg'=>'string'
       ]);
       $user= Auth::user();
       $subject = $request->input('subject');
       $reciever = $request->input('reciever');
       $msg = $request->input('msg');
       $booking = DB::table('bookings')->where('request_ID', '=', $reciever)->get();

       $msg = new mgs;
       $msg->seeker=$booking[0]->seeker;
       $msg->provider=$booking[0]->provider;
       $msg->msg_ID=$booking[0]->request_ID;
       $msg->title=$subject;
       $msg->msg=$msg;
       $msg->img1="comming soon";
       $msg->img2="comming soon";
       $msg->img3="comming soon";
       $msg->status="new";
       $msg->seeker_action="noo";
       $msg->provider_action="noo";
       $msg->save();

      return ;
    }

}
