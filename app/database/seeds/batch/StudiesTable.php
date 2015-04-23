<?php

class StudiesBatch extends Seeder {

	public function run()
	{
		$singles = array(
			array('nameShort' => 'MD','nameFull' => 'Media Developer'),
			array('nameShort' => 'IV','nameFull' => 'Interactief vormgever'),
			array('nameShort' => 'GD','nameFull' => 'Game Developer'),
			array('nameShort' => 'GA','nameFull' => 'Game Artist'),
			array('nameShort' => 'GV','nameFull' => 'Grafisch Vormgever'),
			array('nameShort' => 'AV','nameFull' => 'Animatie/AV-vormgeven'),
		);


		$nested = array(

			/*
				Audiovisueel-technicus
			 */
			array(
				'parent' => array('nameShort' => 'AT','nameFull' => 'Audiovisueel-technicus'),
				'records'	=> array(
					array('nameShort' => 'AT3X','nameFull' => 'Allround medewerker AV-productie'),
					array('nameShort' => 'AT4B','nameFull' => 'AV-techniek (Cameraman)'),
					array('nameShort' => 'AT4G','nameFull' => 'AV-techniek (Geluidstechnicus)'),
					array('nameShort' => 'AT4L','nameFull' => 'AV-techniek (Lichttechnicus)'),
					array('nameShort' => 'AT3X','nameFull' => 'Allround evenemententechnicus'),
					array('nameShort' => 'GT4A','nameFull' => 'AV-techniek (Geluidstechnicus)'),
				)
			),
			
			/*
				Filmacteur
			 */
			array(
				'parent' => array('nameShort' => 'FA','nameFull' => 'Filmacteur'),
				'records'	=> array(
					array('nameShort' => 'FA','nameFull' => 'Filmacteur'),
					array('nameShort' => 'FA3B','nameFull' => 'Filmacteur versneld'),
				)
			),

			/*
				Podiumtechnicus
			 */
			array(
				'parent' => array('nameShort' => 'PT','nameFull' => 'Podiumtechnicus'),
				'records'	=> array(
					array('nameShort' => 'PT2X','nameFull' => 'Medewerker podium-en evenemententechniek'),
					array('nameShort' => 'PT3X','nameFull' => 'Allround Podiumtechnicus'),
					array('nameShort' => 'PT4G','nameFull' => 'Podiumtechnicus geluid'),
					array('nameShort' => 'PT4L','nameFull' => 'Podiumtechnicus licht'),
					array('nameShort' => 'PT4T','nameFull' => 'Podiumtechnicus toneel'),
				)
			),

			/*
				DTP
			 */
			array(
				'parent' => array('nameShort' => 'DTP','nameFull' => 'DTP'),
				'records'	=> array(
					array('nameShort' => 'D2','nameFull' => 'Medewerker DTP (niveau 2)'),
					array('nameShort' => 'D3','nameFull' => 'Allround DTP-er (niveau 3)'),
				)
			),
			

			/*
				Signmaker
			 */
			array(
				'parent' => array('nameShort' => 'SA','nameFull' => 'Signmaker'),
				'records'	=> array(
					array('nameShort' => 'S2A','nameFull' => 'Medewerker Sign (niveau 2)'),
					array('nameShort' => 'S3A','nameFull' => 'Allround Signmaker (niveau 3)'),
				)
			),
			
			/*
				Ruimtelijk Vormgever
			 */
			array(
				'parent' => array('nameShort' => 'RV','nameFull' => 'Ruimtelijk Vormgever'),
				'records'	=> array(
					array('nameShort' => 'RV4A','nameFull' => 'Vormgever productpresentatie'),
					array('nameShort' => 'RV4B','nameFull' => 'Stand-,winkel-en decorvormgever')
				)
			)
		);

		/**
		 * Singles
		 */
		foreach($singles as $study)
		{
			$this->command->comment("Creating {$study['nameFull']}");
			Study::create($study);
		}
		$this->command->info("Singles done!");

		/**
		 * Nested
		 */
		foreach($nested as $family)
		{
			$this->command->comment("PARENT: {$family['parent']['nameFull']}");
			$parent = Study::create($family['parent']);
				
			/**
			 * Childs
			 */
			foreach($family['records'] as $child){
				$this->command->comment("\tCHILD: {$child['nameFull']}");
				$child['parent_id'] = $parent->id;
				//var_dump($child);
				Study::create($child);
			}

			$this->command->comment("Done");
			
		}
	}

}