<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\seekers_details;
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

    public function chat(){
      $user= Auth::user();
      if ($user->subscribtion!="seeker") {
        return redirect('/home');
      }
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      $booking = DB::table('bookings')->where('seeker', '=', $user['email'])->where('status', '=', "accepted")->latest()->get();
      return view('s_page.chat_room',['reciever'=>$booking,'seeker'=>$seeker,'provider'=>$provider]);
    }
    public function profile(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      $providers = DB::table('providers')->inRandomOrder()->paginate(12);
      return view('s_page.profile',['seeker'=>$seeker,'provider'=>$provider]);

    }

    public function providers(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      if ($seeker[0]->first_name=="noo" && $seeker[0]->last_name=="noo") {
        return redirect('/update_sprofile');
      }
      $providers = DB::table('providers')->inRandomOrder()->paginate(12);
      return view('s_page.s_providers',['providers'=>$providers, 'seeker'=>$seeker,'provider'=>$provider]);
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
        $provider=[];
        $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      return view('s_page.provider_detail',['details'=>$provid,'seeker'=>$seeker,'provider'=>$provider]);
      } else {
      return redirect('/load_provider');
      }

    }
    public function loadup_profile(){
      $user=Auth::user();
      if ($user['subscribtion']!="seeker") {
        return redirect('/home');
      }
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      return view('s_page.update_profile',['seeker'=>$seeker,'provider'=>$provider]);
    }
    public function update_profile(Request $request){
      $user=Auth::user();
      if ($user['subscribtion']!="seeker") {
        return redirect('/home');
      }$this->Validate($request, [
         'title'=> 'required|string',
         'fname'=>'required|string',
         'lname'=>'required|string',
         'phone'=>'required|string',
         'bg'=>'required|string',
         'age'=>'required|string',
         'gen'=>'required|string',
         'genotype'=>'required|string',
         'weigh'=>'required|string',
         'allergic'=>'required|string',
         'asthmatic'=>'required|string',
         'epileptic'=>'required|string',
         'operation'=>'required|string'
       ]);
       $seeker = DB::table('seekers_details')->where('email', '=', $user['email'])->get();
       if ($seeker[0]->first_name=="noo"||$seeker[0]->last_name=="noo") {
        $img_name= "seeker_".md5("bereobong").".jpg";
         if ($request->hasFile('img')) {
           $request->file('img');
           $request->file('img')->storeAs('public',$img_name);

         }
         DB::table('seekers_details')->where('email', '=', $user['email'])->update(['title' => $request->input('title'),
         'first_name'=>$request->input('fname'),'last_name'=>$request->input('lname'),'phone'=>$request->input('phone'),
         'gender'=>$request->input('gen'),'blood_group'=>$request->input('bg'),'genotype'=>$request->input('genotype'),
         'age'=>$request->input('age'),'asthmatic'=>$request->input('asthmatic'),'epileptic'=>$request->input('epileptic'),
         'operation'=>$request->input('operation'),'allergic'=>$request->input('allergic'),'weigh'=>$request->input('weigh'),
         'img'=>$img_name]);
         return redirect('/s_profile');
       }else {
         return redirect('/home');
       }


    }
    public function prescriptions(Request $request){
      $user=Auth::user();
      if ($user['subscribtion']!="seeker") {
        return redirect('/home');
      }
      $id=$request->get('booking_id');
      $provider=[];
      $prescrib = DB::table('prescriptions')->where('booking_id', '=', $id)->latest()->paginate(10);
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      return view('s_page.s_prescription', ['seeker'=>$seeker,'provider'=>$provider,'prescrib'=>$prescrib]);
    }

    public function transac_hys(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      $sub_hys = DB::table('subcription_hys')->where('email', '=', Auth::user()->email)->latest()->paginate(10);
      return view('s_page.transac_hys', ['sub_hys'=>$sub_hys,'seeker'=>$seeker,'provider'=>$provider]);
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
       $unit = DB::table('subcriptions')->where('email', '=', Auth::user()->email)->get();
       if ($unit[0]->unit>0) {
         $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
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
        $booking->img= $seeker[0]->img;
        $booking->seeker_action= "noo";
        $booking->provider_action= "noo";
        $booking->save();
        return back()->with('booking','Booking successful');
       } else {
        return redirect('/pricing');
       }
    }
    public function view_booking(){
      if (Auth::user()->subscribtion!="seeker") {
        return redirect('/home');
      }
      $booking = DB::table('bookings')->where('seeker', '=', Auth::user()->email)->latest()->paginate(10);
      $provider=[];
      $seeker = DB::table('seekers_details')->where('email', '=', Auth::user()->email)->get();
      return view('s_page.bookings',['booking'=>$booking,'provider'=>$provider,'seeker'=>$seeker]);
    }
}
