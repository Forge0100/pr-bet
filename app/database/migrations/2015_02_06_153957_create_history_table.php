<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('histroy', function($t){
			$t->increments('id');
			$t->integer('id_user'); // -
			$t->integer('get_id_user'); // +
			$t->decimal('money', 10, 2);
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
		Schema::drop('histroy');
	}

}
