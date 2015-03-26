<?php

class Report extends Eloquent {

	public static function add( $data )	{
		$report = new Report();
		$report->game_id = $data['game_id'];
		$report->report_id = $data['report_id'];
		$report->message = $data['message'];
		$report->user_id = Auth::id();
		$report->save();
	}

	public static function validate( $data ) {
		return Validator::make(
			$data,
			[
				'game_id' => 'required|integer',
				'report_id' => 'required|integer|between:1,10',
				'message' => 'required'
			]);
	}

}
