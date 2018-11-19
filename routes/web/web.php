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
include 'base.php';

Route::get('privacy-policy', 'IndexController@privacyPolicy');
Route::get('terms-of-service', 'IndexController@termsOfService');