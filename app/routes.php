<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::get('/simple-simon', 'HomeController@simon');

Route::get('/bieber-beater', 'HomeController@bieberBeater');

Route::get('/quickweather', 'HomeController@quickWeather');

/* If you want to have a variable injected into your route, Format is {variable?}.
Format for default variable is function($name = default variable)
*/
Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess?}', 'HomeController@rollDice');

Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');

Route::post('/login', 'UsersController@doLogin');
Route::get('/logout', 'UsersController@logout');