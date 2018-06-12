<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $vr_mail = str_random(30);
      $_id = microtime().str_random(30);
      $val_mail = array(
        'reg_mail' => $data['email'],
        'validate' => $vr_mail, );
        Mail::send('mails.validate', $val_mail, function ($message) use ($val_mail)
         {
           $message->from('noreply@icare.com', 'iCare.LTD');
           $message->sender('noreply@icare.com', 'iCare.LTD');
           $message->to($val_mail['reg_mail'], $name = null);
           $message->replyTo('noreply@icare.com', 'iCare.LTD');
           $message->subject('Activate your acount to complate registration');

         });
        return User::create([
            'users_id' => $_id,
            '_from' =>"main",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'activation'=>$vr_mail,
            'subscribtion' => "noo"
        ]);

    }

}
