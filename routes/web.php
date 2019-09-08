<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::get('/check', 'MainController@check');
Route::post('/result', 'MainController@result');
Route::post('/rate', 'MainController@rate');

Route::get('/login', 'AuthController@login');
Route::post('/authenticate', 'AuthController@authenticate');
Route::get('/signup', 'AuthController@signup');
Route::post('/register', 'AuthController@register');
Route::get('/logoutbambang', 'AuthController@logout');
