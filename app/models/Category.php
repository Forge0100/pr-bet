<?php

class Category extends Eloquent {

	protected $table = 'categories';

	public static function getTitleAttribute() {
		return Category::all();
	}
}
