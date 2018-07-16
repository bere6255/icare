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
Route::get('/pricing', 'HomeController@pricing');
Route::post('/provider_request', 'HomeController@provider_request');
Route::get('/getstate', 'HomeController@getstate');
Auth::routes();
Route::get('/payment/callback', 'HomeController@handleGatewayCallback');
Route::post('/pay', 'HomeController@redirectToGateway')->name('pay');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/activate_account', 'other@activate');
Route::post('/resend_activate', 'HomeController@resend_activate');
//for providers
Route::get('/provider_create', 'HomeController@create_provider');
Route::get('/provider', 'providers@index')->name('provider');
Route::get('/transaction_hys', 'providers@transac_hys');
Route::get('/doctors_booking', 'providers@view_booking');
Route::get('/doctors_chatroom', 'providers@chat_room');
Route::get('/compose_message', 'providers@compose');
Route::post('/api/pro_mgs', 'providers@send_mail');
Route::get('/doc_prescribtion', 'providers@prescrib');// pending change
Route::post('/booking_accept', 'providers@booking_accept');
Route::post('/booking_reject', 'providers@booking_reject');
//for seekers
Route::get('/seekers_create', 'HomeController@create_seeker');
Route::get('/s_dashboard', 'HomeController@seekers_dashboard');
Route::get('/seekers_chatroom', 'seekersController@chat');
Route::post('/bookings', 'seekersController@booking');
Route::get('/seeker_viewbook', 'seekersController@view_booking');
Route::get('/s_transec_hys', 'seekersController@transac_hys');
Route::get('/load_provider', 'seekersController@provisers');
Route::get('/view_provider', 'seekersController@view_provider');
Route::get('/s_prescribtions', 'seekersController@prescriptions');
Route::get('/s_message/sent', 'seekersController@msg_sent');
Route::get('/s_message/trash', 'seekersController@msg_trash');
Route::get('/s_message/compose', 'seekersController@msg_compose');
