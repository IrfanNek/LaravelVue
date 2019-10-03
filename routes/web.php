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
    return view('pre-register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/qrcode', 'QrController@make'); // or this ? since you are calling these methods from the index method
Route::get('/vcard', 'QrController@make'); // Why do you need this ?

Route::post("/pre-register","QrController@index");
