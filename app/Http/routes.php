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

Route::group(['middleware' => ['web']], function() {

	Route::get('/', function() {
		return view('login.pages.welcome');
	});

	Route::post('/login', [
		'uses' => 'UserController@login',
		'as' => 'login'
	]);

	Route::post('/register', [
		'uses' => 'UserController@register',
		'as' => 'register'
	]);

	Route::get('dashboard', [
		'uses' => 'UserController@getDashboard',
		'middleware' => 'auth',
		'as' => 'dashboard'
	]);

	Route::post('username', [
		'uses' => 'UserController@username',
		'as' => 'username'
	]);
});
