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
		return view('frontend.dashboard.index');
	});
	Route::get('/dashboard', function(){
		return view('frontend.dashboard.dashboard');
	});
	Route::get('/manage-profile', function(){
		return view('frontend.dashboard.profile');
	});
	Route::get('/change-password', function(){
		return view('frontend.dashboard.changepassword');
	});
	Route::get('/create-extension', function(){
		return view('frontend.dashboard.create-extension');
	});
	Route::get('/call-report', function(){
		return view('frontend.dashboard.call-report');
	});
	Route::get('/disposition-call-report', function(){
		return view('frontend.dashboard.disposition-call_report');
	});
	Route::get('/billing-info', function(){
		return view('frontend.dashboard.billing-info');
	});
});

Route::match(['get','post'],'/register', 'frontend\RegisterController@register');
Route::match(['get','post'],'/verification', 'frontend\RegisterController@accountVerify');
Route::match(['get','post'],'/login', 'frontend\RegisterController@accountLogin');
Route::get('logout', 'frontend\RegisterController@logout');

Route::get('/pricing-plan', function(){
	return view('frontend.membership');
});
Route::get('/update-pricing-plan', function(){
	return view('frontend.update-pricing');
});
