<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('nl_NL');

		foreach(range(50, 100) as $index)
		{
			Student::create([
				'group_id'	=>	Group::orderByRaw("RAND()")->firstOrFail()->id,
				'student' 	=> 	$faker->randomNumber(7),
				'password'	=> 	Hash::make($faker->randomNumber(7)),
				'nameFirst'	=>	$faker->firstName,
				'nameLast'	=>	$faker->lastName,
				'birthday'	=>	$faker->dateTime
			]);
		}
	}

}