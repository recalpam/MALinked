<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$study = Study::orderByRaw("RAND()")->firstOrFail();
			Group::create([
				'study_id'		=>	$study->id,
				'grade' 	=> "4",
				'description'	=>	$faker->sentence(12)
			]);
		}
	}

}