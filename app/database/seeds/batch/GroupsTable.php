<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupsBatch extends Seeder {

	public function run()
	{
		$studies = array(
			array('nameShort' => 'MM4A','nameFull' => 'Media Manager'),
			array('nameShort' => 'MD4A','nameFull' => 'Media Developer'),
			array('nameShort' => 'IV4A','nameFull' => 'Interactief vormgever'),
			array('nameShort' => 'GD4','nameFull' => 'Game Developer'),
			array('nameShort' => 'GA4','nameFull' => 'Game Artist'),
			array('nameShort' => 'AT3X','nameFull' => 'Allround medewerker AV-productie'),
			array('nameShort' => 'AT4B','nameFull' => 'AV-techniek (Cameraman)'),
			array('nameShort' => 'AT4G','nameFull' => 'AV-techniek (Geluidstechnicus)'),
			array('nameShort' => 'AT4L','nameFull' => 'AV-techniek (Lichttechnicus)'),
			array('nameShort' => 'ET3X','nameFull' => 'Allround evenemententechnicus'),
			array('nameShort' => 'FA3B','nameFull' => 'Filmacteur (niveau 4) versneld'),
			array('nameShort' => 'FA4A','nameFull' => 'Filmacteur'),
			array('nameShort' => 'GT4A','nameFull' => 'AV-techniek (Geluidstechnicus)'),
			array('nameShort' => 'PT2X','nameFull' => 'Medewerker podium-en evenemententechniek'),
			array('nameShort' => 'PT3X','nameFull' => 'Allround Podiumtechnicus'),
			array('nameShort' => 'PT4G','nameFull' => 'Podiumtechnicus geluid'),
			array('nameShort' => 'PT4L','nameFull' => 'Podiumtechnicus licht'),
			array('nameShort' => 'PT4T','nameFull' => 'Podiumtechnicus toneel'),
			array('nameShort' => 'D2','nameFull' => 'Medewerker DTP (niveau 2)'),
			array('nameShort' => 'D3','nameFull' => 'Allround DTP-er (niveau 3)'),
			array('nameShort' => 'S2A','nameFull' => 'Medewerker Sign (niveau 2)'),
			array('nameShort' => 'S3A','nameFull' => 'Allround Signmaker (niveau 3)'),
			array('nameShort' => 'GV4','nameFull' => 'Grafisch Vormgever'),
			array('nameShort' => 'AV4A','nameFull' => 'Animatie/AV-vormgeven'),
			array('nameShort' => 'RV4A','nameFull' => 'Vormgever productpresentatie'),
			array('nameShort' => 'RV4B','nameFull' => 'Stand-,winkel-en decorvormgever')
		);

		foreach($studies as $study)
		{
			//echo $study['nameShort'];
			Study::create($study);
		}
	}

}