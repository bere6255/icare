<?php

namespace App\Http\Controllers;
use Auth;
use App\subcription;
use App\subcription_hys;
use Mail;
use Paystack;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
      $this->Validate($request, [
         'email'=> 'required|string',
         'amount'=>'required|string'
       ]);
      $email = $request->input('email');
      $amount = $request->input('amount');
      $tran_id = str_random(10);

      $sub_hys = new subcription_hys;
      $sub_hys->email = $user['id'];
      $sub_hys->sub_id = $tran_id;
      $sub_hys->unit = $order_table_id;
      $sub_hys->status = "processing";
      $sub_hys->amount = $order_amount;
      $sub_hys->save();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {

        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        /*
        $sub = new subscription;
        $sub->email = $seller_id;
        $sub->unit = $user['id'];
        $sub->amount = $order_amount;
        $sub->status = "processing";
        $sub->save();
        */
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    public function index()
    {
        if (Auth::user()->subscribtion=="provider") {
          return redirect('/doctors');
        } else {
          $mail_sent=0;
         $sub = DB::table('subcriptions')->where('email', '=', Auth::user()->email)->get();
         $sub_hys = DB::table('subcription_hys')->where('email', '=', Auth::user()->email)->latest()->get();
         return view('home',['sub'=>$sub,'sub_hys'=>$sub_hys,'mail_sent'=>$mail_sent]);
        }
    }
    public function create_seeker(){
          $user=Auth::user();
      if ($user->subscribtion=="noo") {
        $sub = new subcription;
        $sub->email = $user->email;
        $sub->unit = 0;
        $sub->users_id = $user->users_id;
        $sub->sub_type ='standard';
        $sub->save();
        DB::table('users')->where('email',$user->email )->update(['subscribtion' => "seeker"]);
        return view('s_page.pricing');
      } else {
        return redirect('home');
        // this is for creation of Seekers
      }

    }

    public function create_provider(){
      $user=Auth::user();
      return view('d_page.doc_reg_form');
      // this is for creating provider
    }
    public function seekers_dashboard(){
      return view('s_page.seekers_dashboard');
    }
    public function resend_activate(){
      $user=Auth::user();
      $val_mail = array(
        'reg_mail' => $user->email,
        'validate' => $user->activation, );
        Mail::send('mails.validate', $val_mail, function ($message) use ($val_mail)
         {
           $message->from('noreply@icare.com', 'iCare.LTD');
           $message->sender('noreply@icare.com', 'iCare.LTD');
           $message->to($val_mail['reg_mail'], $name = null);
           $message->replyTo('noreply@icare.com', 'iCare.LTD');
           $message->subject('Activate your acount to complate registration');

         });
      return back();
    }

    public function pricing () {
        return view('s_page.pricing');
    }

}
