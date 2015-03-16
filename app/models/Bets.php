<?php

class Bets extends Eloquent {

	public static function add($data) {
		$bet = new Bets();
		$bet->number_game = $data['number_game'];
		$bet->player = Auth::id();
		$bet->command = $data['command'];
		$bet->save();
	}

	public static function validate( $data ) {
		return Validator::make(
			$data,
			[
				'number_game' => 'required|integer',
				'player' => 'required',
				'command' => 'required|boolean'
			]);
	}

	// Получаем цену ставки за текущим ID ставки
	public static function getPriceBet($id_game) {
		return DB::table('games')
					->where('id', '=', $id_game);
	}

	// Функция проверяет наличие ставки с указаным ID игры и с текущим ID пользователя (который не указываеться)
	public static function checkBet( $bets_id ) {
		$count = Bets::whereRaw('number_game = ? and player = ?', [$bets_id, Auth::id()])->count();
		if ($count == 1)
			return true;
		else
			return false;
	}

}