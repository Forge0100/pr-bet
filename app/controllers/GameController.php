<?php

class GameController extends BaseController {

	public function game()
	{
		return View::make('add_game')->with(['news' => News::all(), 'categories' => DB::table('categories')->lists('title')]);
	}

	public function add()
	{
		$data = Input::all();
		$validator = Game::validate($data);

		if (Input::hasFile('image')) {
	        $file            = Input::file('image');
	        $destinationPath = public_path().'/uploads/';
	        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	    }

		$now_date = date("Y-m-d H:i:s");

		if ( $validator->fails() || ($data['start_date'] <= $now_date) ):
			return Redirect::back()->withErrors($validator, 'register');
		endif;

		Game::add($data, $filename);

		return Redirect::to('/'); 
	}

	public function viewGame($id = null)
	{
		$games = Game::where('id', '=', $id)->get();
		$game = $games[0];
		return View::make('view')->with(['game' => $game]);
	}

	public function categoryGame($id = null)
	{
		return View::make('category')->with(['games' => Game::where('game', '=', $id)->get()]);
	}

}