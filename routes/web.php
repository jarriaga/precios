<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile/{name}/{id}/edit','Profile\\ProfileController@editProfile')->name('getProfile');
});


Route::get('/profile/{name}/{id}','Profile\\ProfileController@getProfile')->name('getProfile');

Auth::routes();

Route::get('/home', 'HomeController@index');
