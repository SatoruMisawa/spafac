<?php

/*
|--------------------------------------------------------------------------
| WebRoutes
|--------------------------------------------------------------------------
|
| Here is where you can register webRoutes for your application. These
|Routes are loaded by theRouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest:testers'], function() {
	Route::group(['prefix' => '/tester'], function() {
		Route::get('/login', 'Tester\SessionController@new')->name('tester.session.new');
		Route::post('/login', 'Tester\SessionController@create')->name('tester.session.create');
	});
});

Route::group(['middleware' => 'auth:testers'], function() {
	Route::group(['prefix' => 'tester'], function() {
		Route::get('/logout', 'Tester\SessionController@delete')->name('tester.session.delete');
	});

	include 'base.php';
});
