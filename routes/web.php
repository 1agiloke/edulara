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
	
    return view('home');
});
// tutorial

// Route::get('/user', 'UserController@Index');
// Route::get('/user/{id}', 'UserController@Dashboard');

Route::get('/event', 'EventController@Index');

// Route::get('/event/add', 'EventController@Add');

// Route::get('/event/edit/{id}', 'EventController@Edit');

// Route::put('/event/edit/{id}', 'EventController@Update');

// Route::get('/event/{id}', 'EventController@Show');

// Route::delete('/events/{id}', 'EventController@Delete');

// Route::post('/events', 'EventController@Insert');

// Educationeer
Route::get('educationeer', function(){
dd(Auth::User());
	
	return view('pages.index');
});
Auth::routes();

Route::get('/home', 'PageController@index');
Route::get('/ranking', 'PageController@ranking');
Route::get('/donasi', 'PageController@donasi');
Route::get('/donasiuang', 'AuthPage@donasiuang');
Route::post('/donasiuang', 'AuthPage@tambahDonasiuang');
Route::get('/donasibarang', 'AuthPage@donasibarang');
Route::get('/lelang', 'PageController@lelang');
Route::get('/lelang/{id}', 'PageController@lelangdetail');
Route::get('/lelangend', 'PageController@lelangend');


