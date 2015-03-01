<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class News extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function add( $data )	{
		$news = new News();
		$news->message = $data['message'];
		$news->creator = Auth::id();
		$news->save();
	}

}
