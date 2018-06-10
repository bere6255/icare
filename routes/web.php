<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Auth::routes();
Route::get('/payment/callback', 'HomeController@handleGatewayCallback');
Route::post('/pay', 'HomeController@redirectToGateway')->name('pay');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/activate_account', 'other@activate');
Route::post('/resend_activate', 'HomeController@resend_activate');
//for providers
Route::get('/provider_create', 'HomeController@create_provider');
//for seekers
Route::get('/seekers_create', 'HomeController@create_seeker');
Route::get('/s_dashboard', 'HomeController@seekers_dashboard');
Route::get('/s_message', 'seekersController@message');
Route::get('/s_doctors', 'seekersController@doctors');
Route::get('/s_prescribtions', 'seekersController@prescriptions');
Route::get('/s_message/sent', 'seekersController@msg_sent');
Route::get('/s_message/trash', 'seekersController@msg_trash');
Route::get('/s_message/compose', 'seekersController@msg_compose');
