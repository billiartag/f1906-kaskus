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
// Routing awal waktu buka localhost/TAMario/public
Route::get('/', [
	'uses' => 'GuestController@index'
]);

Route::match(array('GET','POST'),'register',[
	'uses' => 'GuestController@register'
]);

Route::get('/home', [
	'uses' => 'GuestController@home'
]);
Route::get('/story', [
	'uses' => 'GuestController@story'
]);
Route::get('/dashboard', [
	'uses' => 'GuestController@dashboard'
]);
Route::get('/daftar', [
	'uses' => 'GuestController@daftar'
]);


