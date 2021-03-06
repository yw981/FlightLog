<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('flightlog','FlightLogController');

Route::get('/','FlightLogController@index');

Route::get('/user/register','UserController@register');
Route::post('/user/register','UserController@store');
Route::get('/verify/{confirm_code}','UserController@confirmEmail');
Route::get('/user/login','UserController@login');
Route::get('/user/avatar','UserController@avatar');
Route::post('/avatar','UserController@changeAvatar');
Route::post('/user/login','UserController@signIn');
Route::get('/user/logout','UserController@logout');
