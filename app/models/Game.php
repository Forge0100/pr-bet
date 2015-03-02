<?php

class Game extends Eloquent {

	public static function add( $data, $filename )	{
		$game = new Game();
		$game->title = $data['title'];
		$game->description = $data['description'];
		$game->image = $filename;
		$game->game = $data['game'];
		$game->video_player = $data['video_player'];
		$game->command_1 = $data['command_1'];
		$game->command_2 = $data['command_2'];
		$game->originator = Auth::id();
		$game->start_date = $data['start_date'];
		$game->bet = $data['bet'];
		$game->visible = $data['visible'];
		$game->winner = 0;
		$game->save();
	}

	public static function validate( $data ) {
		return Validator::make(
			$data,
			[
				'title' => 'required|min:2|max:100',
				'description' => 'required|min:2',
				'image' => 'required',
				'game' => 'required|numeric',
				'video_player' => 'required|min:2',
				'command_1' => 'required|min:2|max:100',
				'command_2' => 'required|min:2|max:100',
				'start_date' => 'required|date|min:2|max:100',
				'bet' => 'required',
				'visible' => 'required|boolean'
			]);
	}

}
