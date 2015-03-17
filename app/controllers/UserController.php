<?php

class UserController extends BaseController {

	public function login()
	{

		$data = Input::all();

	 	if ( User::login($data) ):
	 		return Redirect::to('/');
	 	else:
	 		return Redirect::back()->withErrors([ 'message' => 'fail' ], 'login');
	 	endif;
		
	}

	public function profile()
	{
		return View::make('profile')/*->with('data', User::all()->where(['id' => Auth::id()]))*/;
	}

	public function editProfile()
	{
		$data = Auth::user();
		return View::make('edit_profile')->with('data', $data);
	}

	// На доработку
	public function postEditProfile()
	{
		$data = Input::all();

		if( empty($data['first_name']) || empty($data['second_name']) )
			return Redirect::back()->withError('');
		else{
			User::editProfile($data);
			return Redirect::back();
		}
	}

	public function postWebmoneyProfile()
	{
		$data = Input::all();

		if( empty($data['wmr']) || empty($data['wmz']) )
			return Redirect::back()->withError('');
		else{
			User::editWebmoney($data);
			return Redirect::back();
		}
	}

	public function postAddInvite()
	{
		$data = Input::all();

		if(Auth::user()->root == 1) {
			User::addInvite($data);
			User::updateStatusProfile();
		}
		return Redirect::to('/profile');
	}

	public function logout() 
	{
		if ( ! Auth::check() ):
			return Redirect::to('/');
		endif;

		Auth::logout();
		
		return Redirect::to('/');
	}

	public function register()
	{
		$data = Input::all();

		$validator = User::validate($data);

		if ( $validator->fails() ):
			return Redirect::back()->withErrors($validator, 'register');
		endif;

		User::register($data);

		return Redirect::to('/');
	}

}