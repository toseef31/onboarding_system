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
Route::get('/dashboard', function(){
	return view('frontend.dashboard.dashboard');
});
Route::get('/login', function(){
	return view('frontend.login');
});
Route::get('/register', function(){
	return view('frontend.register');
});
Route::get('/pricing-plan', function(){
	return view('frontend.membership');
});
