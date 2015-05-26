<?php
use Intervention\Image\ImageManager;

class StudentImages extends Seeder {

	public function run()
	{
		ini_set('memory_limit', '-1');

		$student_with_images = array(
  array('student_id' => '2'),
  array('student_id' => '3'),
  array('student_id' => '14'),
  array('student_id' => '20'),
  array('student_id' => '21'),
  array('student_id' => '23'),
  array('student_id' => '24'),
  array('student_id' => '25'),
  array('student_id' => '26'),
  array('student_id' => '27'),
  array('student_id' => '29'),
  array('student_id' => '32'),
  array('student_id' => '33'),
  array('student_id' => '34'),
  array('student_id' => '35'),
  array('student_id' => '36'),
  array('student_id' => '37'),
  array('student_id' => '38'),
  array('student_id' => '39'),
  array('student_id' => '40'),
  array('student_id' => '41'),
  array('student_id' => '42'),
  array('student_id' => '44'),
  array('student_id' => '45'),
  array('student_id' => '46'),
  array('student_id' => '48'),
  array('student_id' => '49'),
  array('student_id' => '50'),
  array('student_id' => '51'),
  array('student_id' => '52'),
  array('student_id' => '53'),
  array('student_id' => '54'),
  array('student_id' => '56'),
  array('student_id' => '57'),
  array('student_id' => '58'),
  array('student_id' => '59'),
  array('student_id' => '60'),
  array('student_id' => '61'),
  array('student_id' => '64'),
  array('student_id' => '66'),
  array('student_id' => '68'),
  array('student_id' => '69'),
  array('student_id' => '70'),
  array('student_id' => '73'),
  array('student_id' => '74'),
  array('student_id' => '75'),
  array('student_id' => '77'),
  array('student_id' => '79'),
  array('student_id' => '80'),
  array('student_id' => '82'),
  array('student_id' => '83'),
  array('student_id' => '84'),
  array('student_id' => '85'),
  array('student_id' => '87'),
  array('student_id' => '88'),
  array('student_id' => '89'),
  array('student_id' => '90'),
  array('student_id' => '92'),
  array('student_id' => '93'),
  array('student_id' => '95'),
  array('student_id' => '96'),
  array('student_id' => '99'),
  array('student_id' => '101'),
  array('student_id' => '102'),
  array('student_id' => '106'),
  array('student_id' => '111'),
  array('student_id' => '139'),
  array('student_id' => '150'),
  array('student_id' => '152'),
  array('student_id' => '153'),
  array('student_id' => '155'),
  array('student_id' => '157'),
  array('student_id' => '158'),
  array('student_id' => '161'),
  array('student_id' => '163'),
  array('student_id' => '167'),
  array('student_id' => '170'),
  array('student_id' => '174'),
  array('student_id' => '175'),
  array('student_id' => '178'),
  array('student_id' => '182'),
  array('student_id' => '189'),
  array('student_id' => '217'),
  array('student_id' => '218'),
  array('student_id' => '220'),
  array('student_id' => '221'),
  array('student_id' => '222'),
  array('student_id' => '223'),
  array('student_id' => '224'),
  array('student_id' => '225'),
  array('student_id' => '226'),
  array('student_id' => '227'),
  array('student_id' => '228'),
  array('student_id' => '229'),
  array('student_id' => '232'),
  array('student_id' => '233'),
  array('student_id' => '234'),
  array('student_id' => '236'),
  array('student_id' => '238'),
  array('student_id' => '239'),
  array('student_id' => '240'),
  array('student_id' => '243'),
  array('student_id' => '244'),
  array('student_id' => '245'),
  array('student_id' => '248'),
  array('student_id' => '253'),
  array('student_id' => '255'),
  array('student_id' => '256'),
  array('student_id' => '257'),
  array('student_id' => '258'),
  array('student_id' => '260'),
  array('student_id' => '262'),
  array('student_id' => '263'),
  array('student_id' => '264'),
  array('student_id' => '266'),
  array('student_id' => '267'),
  array('student_id' => '271'),
  array('student_id' => '272'),
  array('student_id' => '274'),
  array('student_id' => '275'),
  array('student_id' => '277'),
  array('student_id' => '278'),
  array('student_id' => '279'),
  array('student_id' => '280'),
  array('student_id' => '283'),
  array('student_id' => '285'),
  array('student_id' => '286'),
  array('student_id' => '289'),
  array('student_id' => '291'),
  array('student_id' => '292'),
  array('student_id' => '295'),
  array('student_id' => '297'),
  array('student_id' => '298'),
  array('student_id' => '300'),
  array('student_id' => '303'),
  array('student_id' => '304'),
  array('student_id' => '305'),
  array('student_id' => '306'),
  array('student_id' => '308'),
  array('student_id' => '309'),
  array('student_id' => '310'),
  array('student_id' => '311'),
  array('student_id' => '312'),
  array('student_id' => '314'),
  array('student_id' => '316'),
  array('student_id' => '317'),
  array('student_id' => '318'),
  array('student_id' => '319'),
  array('student_id' => '320'),
  array('student_id' => '321'),
  array('student_id' => '322'),
  array('student_id' => '323'),
  array('student_id' => '324'),
  array('student_id' => '325'),
  array('student_id' => '327'),
  array('student_id' => '328'),
  array('student_id' => '329'),
  array('student_id' => '331'),
  array('student_id' => '332'),
  array('student_id' => '333'),
  array('student_id' => '335'),
  array('student_id' => '337'),
  array('student_id' => '344'),
  array('student_id' => '347'),
  array('student_id' => '348'),
  array('student_id' => '350'),
  array('student_id' => '351'),
  array('student_id' => '352'),
  array('student_id' => '353'),
  array('student_id' => '354'),
  array('student_id' => '355'),
  array('student_id' => '356'),
  array('student_id' => '357'),
  array('student_id' => '359'),
  array('student_id' => '360'),
  array('student_id' => '361'),
  array('student_id' => '362'),
  array('student_id' => '363'),
  array('student_id' => '366'),
  array('student_id' => '369'),
  array('student_id' => '370'),
  array('student_id' => '371'),
  array('student_id' => '372'),
  array('student_id' => '374'),
  array('student_id' => '375'),
  array('student_id' => '377'),
  array('student_id' => '379'),
  array('student_id' => '380'),
  array('student_id' => '381'),
  array('student_id' => '382'),
  array('student_id' => '384'),
  array('student_id' => '385'),
  array('student_id' => '386'),
  array('student_id' => '387'),
  array('student_id' => '388'),
  array('student_id' => '389'),
  array('student_id' => '390'),
  array('student_id' => '391'),
  array('student_id' => '393'),
  array('student_id' => '394'),
  array('student_id' => '396'),
  array('student_id' => '398'),
  array('student_id' => '399'),
  array('student_id' => '400'),
  array('student_id' => '401'),
  array('student_id' => '402'),
  array('student_id' => '403'),
  array('student_id' => '404'),
  array('student_id' => '405'),
  array('student_id' => '6802'),
  array('student_id' => '6803'),
  array('student_id' => '6804'),
  array('student_id' => '6806'),
  array('student_id' => '6811'),
  array('student_id' => '6813'),
  array('student_id' => '6816'),
  array('student_id' => '6818'),
  array('student_id' => '6819'),
  array('student_id' => '6820'),
  array('student_id' => '6821'),
  array('student_id' => '6822'),
  array('student_id' => '6829'),
  array('student_id' => '6832'),
  array('student_id' => '6834'),
  array('student_id' => '6836'),
  array('student_id' => '6841'),
  array('student_id' => '6843'),
  array('student_id' => '6848'),
  array('student_id' => '6865'),
  array('student_id' => '6873'),
  array('student_id' => '6876'),
  array('student_id' => '6878'),
  array('student_id' => '6879'),
  array('student_id' => '6881'),
  array('student_id' => '6882')
);

		
		$filepath = Config::get('files.path');

		$doRemove = $this->command->ask("Do you want to remove all existing images? (Y/n): ", 'n');

		if( $doRemove === 'Y' ){
			$this->command->comment("\nRemoving file");
			if( file_exists($filepath) )
				$this->Delete($filepath);

			Files::truncate();
		} else {
			$this->command->comment("Skipping file removing");
		}

		// Create writeable dir if not exists
		if (!file_exists(Config::get('files.path'))) {
			$this->command->info($filepath . ' not found, creating directory..');
			if (mkdir($filepath, 0777, true)) {
				$this->command->info("\t Success");
			}
			else {
				$this->command->error("\t Failed, aborting operation");
				return false;
			}
		}
		$largepath = Config::get('files.images.large');

		// Create writeable dir if not exists
		if (!file_exists($largepath)) {
			$this->command->info($largepath . ' not found, creating directory..');
			if (mkdir($largepath, 0777, true)) {
				$this->command->info("\t Success");
			}
			else {
				$this->command->error("\t Failed, aborting operation");
				return false;
			}
		}
		$mediumpath = Config::get('files.images.medium');

		// Create writeable thumbnails dir if not exists
		if (!file_exists($mediumpath)) {
			$this->command->info($mediumpath . ' not found, creating directory..');
			if (mkdir($mediumpath, 0777, true)) {
				$this->command->info("\t Success");
			}
			else {
				$this->command->error("\t Failed, aborting operation");
				return false;
			}
		}
		$thumbspath = Config::get('files.images.thumbnails');

		// Create writeable thumbnails dir if not exists
		if (!file_exists($thumbspath)) {
			$this->command->info($thumbspath . ' not found, creating directory..');
			if (mkdir($thumbspath, 0777, true)) {
				$this->command->info("\t Success");
			}
			else {
				$this->command->error("\t Failed, aborting operation");
				return false;
			}
		}


		$count_students = count($student_with_images);
  		$this->command->info("\n--------------- Starting progress, this might take a while ---------------\n");
		$i = 0;
		$broke = 0;
  	 	$last = -1;

  	 	// Loop trough the students
		foreach($student_with_images as $grab){
			
			$hash = md5(str_random(40). time());

			 $i++;

			// Percentage counter
			$count_percentage = round(($i/$count_students) *100);
			if( $count_percentage % 25 == 0 && $count_percentage != $last ){
				$this->command->info("Progress: " .$count_percentage . "%");
				$last = $count_percentage;
			}

			// Get the image from url
			$url = "http://inschrijven.ma-jaarboek.nl/profilepicture.php?id=" . $grab['student_id'];
			$remoteFile = file_get_contents($url);

			if( !strlen($remoteFile) ){
				$this->command->error("- Broken image found. Student ID: " .$grab['student_id']);
				$this->command->info("continuing..");
				$broke++;
				continue;
			}

			// intervention image lib
			$manager = new ImageManager();

			// Get the student
			$student = Student::where('id', '=', $grab['student_id'])->firstOrFail();

			// Get the filetype from response headers
		    $typeHeader = $http_response_header[3];
		    $typeArray = explode('/', $typeHeader);
		    $type = end($typeArray);

			$fileName = $hash.'.'.$type;

		    // Save the file
			$manager->make($remoteFile)->save( Config::get('files.path') . $fileName, 90);

			// large
			$manager->make($remoteFile)->fit(500)->save( Config::get('files.images.large') . $fileName, 90);

			// medium
			$manager->make($remoteFile)->fit(250)->save(Config::get('files.images.medium') .$fileName, 90);

			// thumbail
			$manager->make($remoteFile)->fit(80)->save( Config::get('files.images.thumbnails') .$fileName, 75);

			// Store file in database
			$insert = array(
					'fileHash' => $hash,
					'fileExtension' => $type,
					'fileName' => 'Profielfoto van '. $student['nameFirst']
				);

			// Link stored file to student
			if( DB::table('files')->insert($insert) ){
				$file_id = DB::getPdo()->lastInsertId();
				$student->file_id = $file_id;
				$student->save();
			}
		}

		$this->command->info("\nCompleted, created " .($i-$broke)*3 . " images.\n");
	}

	  private function Delete($path)
	  {
	      if (is_dir($path) === true)
	      {
	          $files = array_diff(scandir($path), array('.', '..'));

	          foreach ($files as $file)
	          {
	              $this->Delete(realpath($path) . '/' . $file);
	          }

	          return rmdir($path);
	      }

	      else if (is_file($path) === true)
	      {
	          return unlink($path);
	      }

	      return false;
	  }

}