<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function($t){
			$t->increments('id');
			$t->string('title');
			$t->text('description');
			$t->string('image');
			$t->integer('game');
			$t->text('video_player');
			$t->string('command_1');
			$t->string('command_2');
			$t->integer('originator');
			$t->timestamp('start_date');
			$t->decimal('bet', 10, 2);
			$t->boolean('visible');
			$t->boolean('winner');
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
		Schema::drop('games');
	}

}
