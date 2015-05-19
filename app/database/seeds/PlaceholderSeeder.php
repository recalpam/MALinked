<?php

class PlaceholderSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info("Generating Students .. ");
		$this->call('FakeStudentsSeeder');
		$this->command->info("Done! Credits @ AlexLisenkov & DonnyHegener.");
	}

}
