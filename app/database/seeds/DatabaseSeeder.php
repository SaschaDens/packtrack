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
		/*$this->call('GroupsTableSeeder');
		$this->call('AdminsTableSeeder');
		$this->call('DeliverypointsTableSeeder');
		$this->call('CourrierLocationTableSeeder');
		$this->call('PackageTableSeeder');
		$this->call('Package_logTableSeeder');//*/
		$this->call('UsersTableSeeder');
	}

}