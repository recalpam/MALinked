<?php

class StudiesBatch extends Seeder {

	public function run()
	{
		$this->command->comment("Truncating Studies");
		Study::truncate();
		$this->command->comment("Truncating Groups");
		Group::truncate();

		$singles = array(
			array('name' => 'Grafisch vormgever','color' => '4fbe96'),
			array('name' => 'Interactief vormgever','color' => 'f4793b'),
			array('name' => 'Audiovisueel vormgever/Animatie','color' => '4f5f8f'),
			array('name' => 'Ruimtelijk vormgever','color' => 'edb032'),
			array('name' => 'Filmacteur','color' => '0db5d9'),
			array('name' => 'AV-technicus','color' => 'ef492c'),
			array('name' => 'Evenemententechnicus','color' => '8db83f'),
			array('name' => 'Geluidstechnicus','color' => 'edb030'),
			array('name' => 'Media- en Gamedeveloper','color' => '932545'),
			array('name' => 'Game artist','color' => '4f2b78'),
			array('name' => 'Mediamanager','color' => 'dc7f82'),
			array('name' => 'DTP-er','color' => 'cd4c60'),
			array('name' => 'Signmaker','color' => '218841'),
			array('name' => 'Podiumtechnicus','color' => '3e3b68')
		);


		$groups = array(

			/*
				Grafisch vormgever
			 */
			array(
				'study' => 'Grafisch vormgever',
				'records'	=> array(
					array('name' => 'GV4A','fullname' => 'Grafisch vormgever'),
					array('name' => 'GV4B','fullname' => 'Grafisch vormgever'),
					array('name' => 'GV4C','fullname' => 'Grafisch vormgever'),
					array('name' => 'GV4D','fullname' => 'Grafisch vormgever'),
					array('name' => 'GV4E','fullname' => 'Grafisch vormgever')
				)
			),
			
			/*
				Interactief vormgever
			 */
			array(
				'study' => 'Interactief vormgever',
				'records'	=> array(
					array('name' => 'IV4A','fullname' => 'Interactief vormgever')
				)
			),

			/*
				Audiovisueel vormgever/Animatie
			 */
			array(
				'study' => 'Audiovisueel vormgever/Animatie',
				'records'	=> array(
					array('name' => 'AV4A','fullname' => 'Animatie/AV-vormgeven')
				)
			),

			/*
				DTP
			 */
			array(
				'study' => 'DTP-er',
				'records'	=> array(
					array('name' => 'D2A','fullname' => 'Medewerker DTP (niveau 2)'),
					array('name' => 'D2B','fullname' => 'Medewerker DTP (niveau 2)'),
					array('name' => 'D3Y','fullname' => 'Allround DTP-er (niveau 3)'),
					array('name' => 'D3Z','fullname' => 'Allround DTP-er (niveau 3)')
				)
			),
			

			/*
				Signmaker
			 */
			array(
				'study' => 'Signmaker',
				'records'	=> array(
					array('name' => 'S2A','fullname' => 'Medewerker Sign (niveau 2)'),
					array('name' => 'S3A','fullname' => 'Allround Signmaker (niveau 3)')
				)
			),
			
			/*
				Ruimtelijk Vormgever
			 */
			array(
				'study' => 'Ruimtelijk Vormgever',
				'records'	=> array(
					array('name' => 'RV4A','fullname' => 'Vormgever productpresentatie'),
					array('name' => 'RV4B','fullname' => 'Stand-,winkel-en decorvormgever')
				)
			),

			/*
				Filmacteur
			 */
			array(
				'study' => 'Filmacteur',
				'records'	=> array(
					array('name' => 'FA4A','fullname' => 'Filmacteur'),
					array('name' => 'FA3B','fullname' => 'Filmacteur (niveau 4) versneld')
				)
			),

			/*
				AV-technicus 
			 */
			array(
				'study' => 'AV-technicus',
				'records'	=> array(
					array('name' => 'AT4B','fullname' => 'AV-techniek (Cameraman)'),
					array('name' => 'AT4L','fullname' => 'AV-techniek (Lichttechnicus)'),
					array('name' => 'AT3X','fullname' => 'Allround medewerker AV-productie')
				)
			),

			/*
				Evenemententechnicus
			 */
			array(
				'study' => 'Evenemententechnicus',
				'records'	=> array(
					array('name' => 'ET3X','fullname' => 'Allround evenemententechnicus')
				)
			),

			/*
				Geluidstechnicus
			 */
			array(
				'study' => 'Geluidstechnicus',
				'records'	=> array(
					array('name' => 'AT4G','fullname' => 'AV-techniek (Geluidstechnicus)'),
					array('name' => 'GT4A','fullname' => 'AV-techniek (Geluidstechnicus)')
				)
			),

			/*
				Media- en Gamedeveloper
			 */
			array(
				'study' => 'Media- en Gamedeveloper',
				'records'	=> array(
					array('name' => 'GD4B','fullname' => 'Game Developer'),
					array('name' => 'GD4A','fullname' => 'Game Developer'),
					array('name' => 'MD4A','fullname' => 'Media Developer')
				)
			),

			/*
				Game artist
			 */
			array(
				'study' => 'Game artist',
				'records'	=> array(
					array('name' => 'GA4B','fullname' => 'Game artist'),
					array('name' => 'GA4A','fullname' => 'Game artist')
				)
			),

			/*
				Mediamanager
			 */
			array(
				'study' => 'Mediamanager',
				'records'	=> array(
					array('name' => 'MM4A','fullname' => 'Mediamanager')
				)
			),

			/*
				Podiumtechnicus
			 */
			array(
				'study' => 'Podiumtechnicus',
				'records'	=> array(
					array('name' => 'PT3X','fullname' => 'Allround Podiumtechnicus'),
					array('name' => 'PT2X','fullname' => 'Medewerker podium-en evenemententechniek'),
					array('name' => 'PT4G','fullname' => 'Podiumtechnicus geluid'),
					array('name' => 'PT4L','fullname' => 'Podiumtechnicus licht'),
					array('name' => 'PT4T','fullname' => 'Podiumtechnicus toneel'),
				)
			),
		);

		/**
		 * Singles
		 */
		foreach($singles as $study)
		{
			$this->command->comment("Creating {$study['name']}");
			Study::create($study);
		}
		$this->command->info("Singles done!");

		/**
		 * Nested
		 */
		foreach($groups as $group)
		{
			$this->command->comment("Creating groups for: {$group['study']}");
			$parent = Study::where('name', '=', $group['study'])->firstOrFail();
				//var_dump($parent->id);
			/**
			 * Childs
			 */
			foreach($group['records'] as $child){
				$child['study_id'] = $parent->id;
				$this->command->comment("\tAdding group: {$child['name']} ({$child['fullname']})");
				Group::create($child);
			}

			$this->command->comment("Done");
			
		}
	}

}