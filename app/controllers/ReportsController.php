<?php

Class ReportsController extends BaseController {

	public function report($id = null) {
		$data = Auth::user();
		return View::make('report')->with(['data' => $data, 'id' => $id]);
	}

	public function add() {
		$data = Input::all();
		$validator = Report::validate($data);

		if( !$validator->fails() ) {
			Report::add($data);
			return Redirect::back();
		}

		return Redirect::back()->withErrors($validator, 'reports');;
	}

}