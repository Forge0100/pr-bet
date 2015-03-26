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

// Биндинги моих классов
App::bind('AppBet', function() {
	return new \lib\AppBet\Main;
});

// Страници авторизированных пользователей
Route::group(array('before' => 'auth'), function()
{
	Route::get('/add_game', 'GameController@game');
	Route::get('/report/{id?}', 'ReportsController@report')->where('id', '[0-9]+');
	Route::get('/profile', 'UserController@profile');
	Route::get('/profile/edit', 'UserController@editProfile');

	// POST-запросы
	Route::post('/add_news', 'NewsController@add');
	Route::post('/add_game', 'GameController@add');
	Route::post('/add_bet', 'BetsController@add');
	Route::post('/view/report', 'ReportsController@add');
	Route::post('/profile/edit', 'UserController@postEditProfile');
	Route::post('/profile/invite', 'UserController@postAddInvite');
	Route::post('/profile/webmoney', 'UserController@postWebmoneyProfile');

	// Нейтральные запросы
	Route::any('/logout', 'UserController@logout');

});

// Страници не авторизированных пользователей
Route::group(array('before' => 'no.auth'), function()
{
	// GET-запросы
	Route::get('/register', 'IndexController@register');

	// POST-запросы
	Route::post('/login', 'UserController@login');
	Route::post('/register', 'UserController@register');
});

// Остальные страници
Route::get('/', 'IndexController@index');
Route::get('/view/{id?}', 'GameController@viewGame')->where('id', '[0-9]+');
Route::get('/category/{id?}', 'GameController@categoryGame')->where('game', '[0-9]+');

// Test page
Route::get('/test', 'IndexController@test');


