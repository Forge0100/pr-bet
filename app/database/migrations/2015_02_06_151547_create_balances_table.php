<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balances', function($t){
			$t->increments('id');
			$t->integer('id_user');
			$t->decimal('money', 10, 2);
			$t->decimal('time_money', 10, 2);
			$t->timestamp('update_time_money_at');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Scheme::drop('balances');
	}

}
