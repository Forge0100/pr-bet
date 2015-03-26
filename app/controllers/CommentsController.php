<?php

Class CommentsController extends BaseController {

	public function add()
	{
		$data = Input::all();
		$validator = Bets::validate($data);

		$id_games = $data['number_game'];

		if ( !$validator->fails() ) {
			// Проверка на достаточность средств для совершения ставки
			if (Balance::find(Auth::id())->money >= Bets::getPriceBet($id_games)) {
				// Добавляем данные в таблицу Ставок
				Bets::add($data);
				// Минусует деньги с таблици Баланса у текущего пользователя
				Balance::subMoney(Bets::getPriceBet($id_games));
			}
		}

		return Redirect::back();
	}


}