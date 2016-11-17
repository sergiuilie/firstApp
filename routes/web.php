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
    return redirect()->route('login');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/users', 'UsersController');
    Route::resource('/contacts', 'ContactsController');
    Route::resource('/notes', 'NotesController');
    Route::resource('/shop', 'ShopController');
});
