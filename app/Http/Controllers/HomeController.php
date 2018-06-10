<?php

namespace App\Http\Controllers;
use Auth;
use Paystack;
use App\Http\Requests;
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
    public function redirectToGateway()
    {
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
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    public function index()
    {
        return view('home');
    }
    public function create_seeker(){
      $user=Auth::user();
      return view('s_page.pricing');
      // this is for creation of Seekers
    }

    public function create_provider(){
      $user=Auth::user();
      return view('d_page.doc_reg_form');
      // this is for creating provider
    }
    public function seekers_dashboard(){
      return view('s_page.seekers_dashboard');
    }

}
