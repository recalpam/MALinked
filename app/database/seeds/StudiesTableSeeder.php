<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Faker\Provider\Lorem;

class StudiesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('nl_NL');

		foreach(range(20, 30) as $index)
		{
			Study::create([
				'nameShort'	=>	strtoupper($faker->word()),
				'nameFull'	=>	implode(" ", $faker->words(3))
			]);
		}
	}

}