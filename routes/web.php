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
Route::resource('DenganSenangHati','UserController');
Route::get('bonus', function() {
	return view('Bonus');
});
Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
