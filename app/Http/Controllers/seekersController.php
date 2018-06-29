<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\booking;
use Auth;
use Illuminate\Http\Request;

class seekersController extends Controller
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
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $providers = DB::table('providers')->inRandomOrder()->paginate(12);
      return view('s_page.s_providers',['providers'=>$providers]);
    }
    public function view_provider(Request $request){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
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
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      return view('s_page.s_prescription');
    }
    public function transac_hys(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $sub_hys = DB::table('subcription_hys')->where('email', '=', Auth::user()->email)->latest()->paginate(10);
      return view('s_page.transac_hys', ['sub_hys'=>$sub_hys]);
    }
    public function booking(Request $request){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $this->Validate($request, [
         'id'=> 'required|string',
         'name'=>'required|string',
         'reason'=>'required|string',
         'note'=>'required|string'
       ]);
      $book_id = str_random(13);
      $provid_id = $request->input('id');
      $seeker_name = $request->input('name');
      $reason = $request->input('reason');
      $note = $request->input('note');
      $seeker_mail= Auth::user()->email;
      $provider = DB::table('users')->where('users_id', '=', $provid_id)->get();
      $provider_mail= $provider[0]->email;
      $booking = new booking;
      $booking->seeker=$seeker_mail;
      $booking->provider= $provider_mail;
      $booking->request_ID= $book_id;
      $booking->name= $seeker_name;
      $booking->reason= $reason;
      $booking->note= $note;
      $booking->status= "processing";
      $booking->seeker_action= "noo";
      $booking->provider_action= "noo";
      $booking->save();
      return back()->with('booking','Booking successful');
    }
    public function view_booking(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $booking = DB::table('bookings')->where('seeker', '=', Auth::user()->email)->latest()->paginate(10);

      return view('s_page.bookings',['booking'=>$booking]);
    }
}
