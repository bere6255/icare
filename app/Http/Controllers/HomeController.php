<?php

namespace App\Http\Controllers;
use Auth;
use App\subcription;
use Illuminate\Support\Facades\Validator;
use App\country;
use App\state;
use App\subcription_hys;
use App\providers;
use App\account;
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
         'amount'=>'required|string',
         'unit'=>'required|string'
       ]);
      $email = $request->input('email');
      $amount = $request->input('amount');
      $unit = $request->input('unit');
      $tran_id = str_random(10);

      $sub_hys = new subcription_hys;
      $sub_hys->email = $email;
      $sub_hys->sub_id = $tran_id;
      $sub_hys->unit = $unit;
      $sub_hys->status = "processing";
      $sub_hys->amount = $amount;
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

        $user=Auth::user();
        if($paymentDetails['status']==true){
           $data= $paymentDetails['data'];
            $customer =$data['customer'];
            $amount =$data['amount'];
            if($customer['email']==$user['email']){
            $tran =DB::table('subcription_hys')->where('email', '=', $user['email'])->latest()->get();
            $trans_id=$tran[0]->sub_id;
            DB::table('subcription_hys')->where('email', '=', $user['email'])->where('sub_id', '=', $trans_id)->update(['status' => "successful"]);
            $sub =DB::table('subcriptions')->where('email', '=', $user['email'])->latest()->get();
            switch ($amount) {
              case 300000:
                $unit = $sub[0]->unit+5;
                break;
              case 600000:
                  $unit = $sub[0]->unit+10;
                  break;
              case 900000:
                  $unit = $sub[0]->unit+15;
                  break;
              case 1200000:
                  $unit = $sub[0]->unit+20;
                break;
              default:
              $unit = $sub[0]->unit+0;
                break;
            }

            DB::table('subcriptions')->where('email', '=', $user['email'])->update(['unit' => $unit]);
            return redirect('/home');
            }else{
              return redirect('/home');
            }
          }
        //dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    public function index()
    {
        if (Auth::user()->subscribtion=="provider") {
          return redirect('/provider');
        } elseif (Auth::user()->subscribtion=="staff") {
        return redirect('staff');
      }elseif (Auth::user()->subscribtion=="admin") {
          return redirect('admin');
      }else{
          $mail_sent=0;
         $sub = DB::table('subcriptions')->where('email', '=', Auth::user()->email)->get();
         $sub_hys = DB::table('subcription_hys')->where('email', '=', Auth::user()->email)->latest()->get();
         $booking = DB::table('bookings')->where('seeker', '=', Auth::user()->email)->latest()->limit(5)->get();
         return view('home',['sub'=>$sub,'sub_hys'=>$sub_hys,'mail_sent'=>$mail_sent,'booking'=>$booking]);
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
      $country = country::all();
      return view('d_page.doc_reg_form',['country'=>$country]);
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

    public function getstate(Request $request){
        $country = $request->get('country');
        $states = DB::table('states')->where('country_id', '=', $country)->get();
        echo "<select id='state' name='state' class='form-control' >";

      foreach ($states->all() as $state) {
        echo "<option value='$state->name'>"; echo $state->name; echo "</option>";
      //echo '<option"';echo 'value="' echo '$sub->sub_cat';  echo'">'; echo $sub->sub_cat;  echo "</option>";
      }
        echo "</select>";
        //return ['sub_cat'=> $subcart];

    }
    public function provider_request(Request $request){
      $this->Validate($request, [
         'title'=> 'required|string',
         'specialty'=>'required|string',
         'first_name'=> 'required|string',
         'last_name'=>'required|string',
         'phone'=> 'required|string',
         'address'=>'required|string',
         'country'=> 'required|string',
         'state'=>'required|string',
         'about'=>'required|string'
       ]);
       $previder = new providers;
       $previder->email=Auth::user()->email;
       $previder->users_id=Auth::user()->users_id;
       $previder->title=$request->input('title');
       $previder->specialty=$request->input('specialty');
       $previder->first_name=$request->input('first_name');
       $previder->last_name=$request->input('last_name');
       $previder->phone=$request->input('phone');
       $previder->address=$request->input('address');
       $previder->country=$request->input('country');
       $previder->state=$request->input('state');
       $previder->about=$request->input('about');
       $previder->verification="unverify";
       $previder->activation="unactivated";
       $previder->img="image url will be at this point";
       $previder->save();
       $user=Auth::user();
       if ($user->subscribtion=="noo") {
       $acc = new account;
       $acc->email = $user->email;
       $acc->users_id = $user->users_id;
       $acc->aver_balance = 0;
       $acc->poten_balance =0;
       $acc->save();
       DB::table('users')->where('email',$user->email )->update(['subscribtion' => "provider"]);
       return redirect('provider');
       } else {
       return redirect('home');
       // this is for creation of Seekers
       }



    }

    public function pricing () {
        return view('s_page.pricing');
    }

}
