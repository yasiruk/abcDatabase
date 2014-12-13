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
		$this->call('BLTableSeeder');
		
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
class BLTableSeeder extends Seeder {
	public function run() {
		/*
			$table->integer('blnumber');
			$table->text('shipper');
			$table->text('consignee')->nullable();
			$table->text('notifyparty')->nullable();
			
			$table->string('vessel')->nullable();
			$table->integer('voyageno');
			$table->string('portoflading');
			$table->string('portofdischarge');
			$table->integer('bookingno')->nullable();
			
			$table->text('commoditydesc');
			$table->string('indentifiedcommodity')->nullable();
			$table->smallInteger('accuracy')->nullable();
			$table->date('shiponboarddate');
			$table->integer('noofcontainers')->nullable();
			
			$table->index('blnumber');
			$table->primary('blnumber');
		*/
		DB::table('bltable')->delete();
		
		BL::create(
			array(
				'blnumber' => 90,
				'shipper' => 'Singer',
				'consignee' => 'ABC', 
				'notifyparty' => 'Dialog',
				'vessel' => 'K-Line',
				'voyageno' => 8900,
				'portoflading' => 'Colombo',
				'portofdischarge' => 'Hambatota',
				'bookingno' => 833,
				'commoditydesc' => 'A container of used computer parts and electronics',
				'shiponboarddate' => '2014-12-10'
				));
		BL::create(
			array(
				'blnumber' => 91,
				'shipper' => 'Singer',
				'consignee' => 'ABC', 
				'notifyparty' => 'Dialog',
				'vessel' => 'K-Line',
				'voyageno' => 8900,
				'portoflading' => 'Colombo',
				'portofdischarge' => 'Hambatota',
				'bookingno' => 833,
				'commoditydesc' => 'A container of used computer parts and electronics',
				'shiponboarddate' => '2014-12-10'
				));
		BL::create(
			array(
				'blnumber' => 92,
				'shipper' => 'Singer',
				'consignee' => 'ABC', 
				'notifyparty' => 'Dialog',
				'vessel' => 'K-Line',
				'voyageno' => 8900,
				'portoflading' => 'Colombo',
				'portofdischarge' => 'Hambatota',
				'bookingno' => 833,
				'commoditydesc' => 'A container of used computer parts and electronics',
				'shiponboarddate' => '2014-12-10'
				));
		BL::create(
			array(
				'blnumber' => 93,
				'shipper' => 'Singer',
				'consignee' => 'ABC', 
				'notifyparty' => 'Dialog',
				'vessel' => 'K-Line',
				'voyageno' => 8900,
				'portoflading' => 'Colombo',
				'portofdischarge' => 'Hambatota',
				'bookingno' => 833,
				'commoditydesc' => 'A container of used computer parts and electronics',
				'shiponboarddate' => '2014-12-10'
				));
		BL::create(
			array(
				'blnumber' => 94,
				'shipper' => 'Singer',
				'consignee' => 'ABC', 
				'notifyparty' => 'Dialog',
				'vessel' => 'K-Line',
				'voyageno' => 8900,
				'portoflading' => 'Colombo',
				'portofdischarge' => 'Hambatota',
				'bookingno' => 833,
				'commoditydesc' => 'A container of used computer parts and electronics',
				'shiponboarddate' => '2014-12-10'
				));
	}
}

?>