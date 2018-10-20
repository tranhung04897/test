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

Route::namespace('Auth')->group(function(){
	Route::get('/dang-ky',  [
		'uses' => 'AuthController@getRegis',
		'as' => 'auth.register'
	]);
	Route::post('/dang-ky',  [
		'uses' => 'AuthController@postRegis',
		'as' => 'auth.register'
	]);
});