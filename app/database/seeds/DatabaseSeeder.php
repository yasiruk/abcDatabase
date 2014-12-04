<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UserTableSeeder');

		
		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		User::create(
			array('username' => 'kassapa', 
							 'first_name' => 'yasiru',
							 'last_name' => 'kassapa',
							 'password' => Hash::make("killerb"))
			);
		$this->command->info('User Table Seeded');		
	}
}