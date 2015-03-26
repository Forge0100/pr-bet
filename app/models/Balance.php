<?php

class Balance extends Eloquent {

	public static function addMoney($money) {
		return DB::table('balances')
						->where('id_user', Auth::id())
						->increment('time_money', $money)
						->update(['update_time_money_at' => date('Y-m-d H:i:s')]);
	}

	public static function subMoney($money) {
		return DB::table('balances')
						->where('id_user', Auth::id())
						->decrement('time_money', $money)
						->update(['update_time_money_at' => date('Y-m-d H:i:s')]);
	}

}
