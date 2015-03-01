<?php

class NewsController extends BaseController {

	public function add()
	{
		if ( Request::ajax() && Auth::check() ):

			$data = Input::all();

			foreach ($data as $field):
				if ( empty($field) ) return 'empty';
			endforeach;

			News::add($data);

			echo 'okay';

		endif;
		/*print_r(Input::all());*/
	}

}