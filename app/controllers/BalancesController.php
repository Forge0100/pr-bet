<?php

Class BalancesController extends BaseController {

	public function add()
	{
		$data = Input::all();

		Bets::add($data);

		return Redirect::back(); 
	}

}