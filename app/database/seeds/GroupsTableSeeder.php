<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		$groups = array(
			array('id' => '1','nameShort' => 'MM4A','description' => 'Media Manager'),
			array('id' => '10','nameShort' => 'MD4A','description' => 'Media Developer'),
			array('id' => '11','nameShort' => 'IV4A','description' => 'Interactief vormgever'),
			array('id' => '12','nameShort' => 'GD4B','description' => 'Game Developer'),
			array('id' => '13','nameShort' => 'GD4A','description' => 'Game Developer'),
			array('id' => '14','nameShort' => 'GA4B','description' => 'Game Artist'),
			array('id' => '15','nameShort' => 'GA4A','description' => 'Game Artist'),
			array('id' => '16','nameShort' => 'AT3X','description' => 'Allround medewerker AV-productie'),
			array('id' => '17','nameShort' => 'AT4B','description' => 'AV-techniek (Cameraman)'),
			array('id' => '18','nameShort' => 'AT4G','description' => 'AV-techniek (Geluidstechnicus)'),
			array('id' => '19','nameShort' => 'AT4L','description' => 'AV-techniek (Lichttechnicus)'),
			array('id' => '20','nameShort' => 'ET3X','description' => 'Allround evenemententechnicus'),
			array('id' => '21','nameShort' => 'FA3B','description' => 'Filmacteur (niveau 4) versneld'),
			array('id' => '22','nameShort' => 'FA4A','description' => 'Filmacteur'),
			array('id' => '23','nameShort' => 'GT4A','description' => 'AV-techniek (Geluidstechnicus)'),
			array('id' => '24','nameShort' => 'PT2X','description' => 'Medewerker podium-en evenemententechniek'),
			array('id' => '25','nameShort' => 'PT3X','description' => 'Allround Podiumtechnicus'),
			array('id' => '26','nameShort' => 'PT4G','description' => 'Podiumtechnicus geluid'),
			array('id' => '27','nameShort' => 'PT4L','description' => 'Podiumtechnicus licht'),
			array('id' => '28','nameShort' => 'PT4T','description' => 'Podiumtechnicus toneel'),
			array('id' => '29','nameShort' => 'D2A','description' => 'Medewerker DTP (niveau 2)'),
			array('id' => '30','nameShort' => 'D2B','description' => 'Medewerker DTP (niveau 2)'),
			array('id' => '31','nameShort' => 'D3Y','description' => 'Allround DTP-er (niveau 3)'),
			array('id' => '32','nameShort' => 'D3Z','description' => 'Allround DTP-er (niveau 3)'),
			array('id' => '33','nameShort' => 'S2A','description' => 'Medewerker Sign (niveau 2)'),
			array('id' => '34','nameShort' => 'S3A','description' => 'Allround Signmaker (niveau 3)'),
			array('id' => '35','nameShort' => 'GV4A','description' => 'Grafisch Vormgever'),
			array('id' => '36','nameShort' => 'GV4B','description' => 'Grafisch Vormgever'),
			array('id' => '37','nameShort' => 'GV4C','description' => 'Grafisch Vormgever'),
			array('id' => '38','nameShort' => 'GV4D','description' => 'Grafisch Vormgever'),
			array('id' => '39','nameShort' => 'GV4E','description' => 'Grafisch Vormgever'),
			array('id' => '40','nameShort' => 'AV4A','description' => 'Animatie/AV-vormgeven'),
			array('id' => '41','nameShort' => 'RV4A','description' => 'Vormgever productpresentatie'),
			array('id' => '42','nameShort' => 'RV4B','description' => 'Stand-,winkel-en decorvormgever')
		);

		foreach($groups as $group)
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