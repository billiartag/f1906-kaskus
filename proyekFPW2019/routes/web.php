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
//guest
Route::get('/', [
	'uses' => 'GuestController@index'
]);

Route::match(array('GET','POST'),'daftar',[
	'uses' => 'GuestController@daftar'
]);
Route::match(array('GET','POST'),'dashboard',[
	'uses' => 'GuestController@dashboard'
]);

Route::get('/home', [
	'uses' => 'GuestController@home'
]);
Route::get('/story', [
	'uses' => 'GuestController@story'
]);
//user
Route::get('/profile', [
	'uses' => 'UserController@toProfile'
]);
Route::get('/logout', [
	'uses' => 'UserController@logout'
]);

Route::match(array('GET','POST'),'createpost',[
	'uses' => 'GuestController@createpost'
]);


Route::get('/daftar', [
	'uses' => 'GuestController@toDaftar'
]);



Route::view("/post","post");
// Route::view("/createpost","createpost");
// Route::view("/daftar","daftar");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/edit','edit_profile');

Route::post('submit_edit','userController@update_data');
