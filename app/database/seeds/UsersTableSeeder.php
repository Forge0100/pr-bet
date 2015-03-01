<?php

class UsersTableSeeder extends Seeder
{
	public function run(){
		DB::table('users')->delete();

		$users = array(
			array(
				'first_name'	=> 'Artem',
				'second_name'	=> 'Gavrylenko',
				'email'			=> 'artem0100@ukr.net',
				'password'		=> Hash::make('forge0100')
			)
		);

		DB::table('users')->insert($users);
	}
}