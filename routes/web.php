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
Route::group(['prefix' => 'user-portal'], function () {
	Route::get('/', function(){
		return view('frontend.dashboard.dashboard');
	});
	Route::get('/manage-profile', function(){
		return view('frontend.dashboard.profile');
	});
	Route::get('/change-password', function(){
		return view('frontend.dashboard.changepassword');
	});
});
Route::get('/login', function(){
	return view('frontend.login');
});
Route::get('/register', 'frontend\RegisterController@register');
Route::get('/pricing-plan', function(){
	return view('frontend.membership');
});
Route::get('/verification', function(){
	return view('frontend.verification');
});
