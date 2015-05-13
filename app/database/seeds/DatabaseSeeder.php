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

		$this->command->info("Importing 'Studies' batch operation");
		$this->call('StudiesBatch');

		$this->command->info("\n----------------------------------------------------\n");

		$this->command->info("Importing 'Students' batch operation");
		$this->call('StudentsBatch');

		$this->command->info("\n----------------------------------------------------\n");

		$this->command->info("Done! Credits @ AlexLisenkov & DonnyHegener.");
	}

}
