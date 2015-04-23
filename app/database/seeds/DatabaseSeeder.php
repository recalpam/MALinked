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
		$this->command->info("Done! Credits @ AlexLisenkov & DonnyHegener.");
	}

}
