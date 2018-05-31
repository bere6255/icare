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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/provider_create', 'HomeController@create_provider');
Route::get('/seekers_create', 'HomeController@create_seeker');
Route::get('/s_dashboard', 'HomeController@seekers_dashboard');
Route::get('/s_message', 'seekersController@message');
Route::get('/s_doctors', 'seekersController@doctors');
