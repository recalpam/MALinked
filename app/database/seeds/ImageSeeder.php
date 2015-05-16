<?php

class ImageSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$this->command->info("Converting projects");
		$this->call('ProjectsBatch');
	}
}