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

Route::get('/', function () {
    return view('welcome');
});



Route::auth();
Route::post('/SecurityQuestions', 'Auth\PasswordController@getSecurityQuestions');
Route::post('/ResetPassword', 'Auth\PasswordController@resetpassword');
Route::post('/PasswordChanged', 'Auth\PasswordController@changepassword');

//Route::post('/Login_new', 'Auth\PasswordController@checkLogin');
Route::resource('team','TeamController');
Route::resource('school','SchoolController');
Route::resource('player','PlayerController');

//
//Route::group(['middleware' => 'CheckLoginStatus'], function()
//{
//    Route::resource('school','SchoolController');
//});