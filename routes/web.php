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
    return view('index');
});

Route::get('restoran', function() {
	return view('restoran');
});

Route::get('menu', function() {
	return view('menu');
});

Route::get('keyword', function() {
	return view('keyword');
});

Route::get('kurir', function() {
	return view('kurir');
});

Route::get('promo', function() {
	return view('promo');
});

Route::get('searching', function() {
	return view('searching');
});

Route::get('slider', function() {
	return view('slider');
});

Route::get('transaksi', function() {
	return view('transaksi');
});

Route::get('user', function() {
	return view('user');
});
