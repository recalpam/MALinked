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

		$this->command->info("Calling StudiesTableSeeder..");
		$this->call('StudiesTableSeeder');
		$this->command->info("Calling GroupsTableSeeder..");
		$this->call('GroupsTableSeeder');
		$this->command->info("Calling StudentsTableSeeder..");
		$this->call('StudentsTableSeeder');
		$this->command->info("Done.");
	}

}
