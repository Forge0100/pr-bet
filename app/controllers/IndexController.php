<?php

class IndexController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index')/*->with('news', Auth::user()->posts())*/->with(['news' => News::all(), 'games' => Game::all()]);
	}

	public function register()
	{
		return View::make('register')->with('news', News::all());
	}

	public function test()
	{
		for ($i=0; $i < 10; $i++) {
			DB::table('invites')->insert(
				['invite' => md5(md5('iArtem/invite/'.$i))]
			);
		}
		return 'Выполнено!';
	}
	
}
