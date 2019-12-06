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

//view
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
Route::view('/edit','edit_profile');


//view - user
Route::get('/profile', [
	'uses' => 'UserController@toProfile'
]);
Route::get('/daftar', [
	'uses' => 'GuestController@toDaftar'
]);
Route::get('/logout', [
	'uses' => 'UserController@logout'
]);

//show dari DB
Route::get("kategori/{id_kategori}",
[
	'uses' => 'GuestController@showKategori']
);
Route::get("post/{id_thread}/{id_post?}",
[
	'uses' => 'GuestController@showPost']
);

//insert ke DB
Route::match(array('GET','POST'),'createpost',[
	'uses' => 'GuestController@createpost'
]);
Route::match(array('GET','POST'),'createpost/{id_thread}/{id_post_balas?}/{kutip?}',[
	'uses' => 'GuestController@createpostReply'
])->middleware('auth');;

Route::match(array('GET','POST'),'createthread/{id_kategori?}',[
	'uses' => 'GuestController@createThread'
]);

Route::view("/post","post");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('submit_edit','userController@update_data');

//admin
Route::get("/buatkategori/{nama}/{deskripsi}",[
	"uses"=>"UserController@buatKategori"
]);

Route::post('/upload_profile_picture','userController@upload_profile_picture');


Route::post('/upload_background_picture','userController@upload_background_picture');

Route::get('/profile/{page_number}', [
	'uses' => 'UserController@toProfile'
]);

Route::post('/profile','UserController@_follow');