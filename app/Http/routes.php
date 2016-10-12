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
	})->name('home');

	Route::post('/login', [
		'uses' => 'UserController@login',
		'as' => 'login'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@logout',
		'as' => 'logout'
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

	Route::get('student/fillprofile', [
		'uses' => 'UserController@fillStudent',
		'middleware' => 'auth',
		'as' => 'student.fill'
	]);

	Route::post('student/data', [
		'uses' => 'DataController@studentData',
		'middleware' => 'auth',
		'as' => 'student.data'
	]);

	Route::get('teacher/fillprofile', [
		'uses' => 'UserController@fillTeacher',
		'middleware' => 'auth',
		'as' => 'teacher.fill'
	]);

	Route::post('teacher/data', [
		'uses' => 'DataController@teacherData',
		'middleware' => 'auth',
		'as' => 'teacher.data'
	]);

	Route::get('teacher/{id}', [
		'uses' => 'ProfileController@teacherShow',
		'as' => 'teacher.profile'
	]);

	Route::get('student/{id}', [
		'uses' => 'ProfileController@studentShow',
		'as' => 'student.profile'
	]);
});
