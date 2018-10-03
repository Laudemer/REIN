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


/* This is the landing page - guest*/
Route::get('/', function(){
    return view('landingPage');
});

Route::get('/partners', function(){
    return view('Partner.login');
});
Route::get('/partners/home', 'Web\Partner\LoginController@doLogin');


Route::get('/admin', function(){
    return view('Admin.login');
});
Route::get('/admin/home', 'Web\Admin\LoginController@doLogin');

