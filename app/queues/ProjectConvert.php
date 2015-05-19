<?php
use Intervention\Image\ImageManager;

class ProjectConvert {

	public function fire($job, $data){

		$project		= 	Project::where('project_id_old', '=', $data['project_id'])->firstOrFail();
		$fileName 		= 	md5( uniqid( $project->id.'_')) . '.' . $data['file_extention'];

		if( $data['file_extention'] == 'pdf' ){
			$remoteDir 	= 	'pdf';
		} else {
			$remoteDir	= 	'images';
		}

		$remoteFile	= file_get_contents("http://inschrijven.ma-jaarboek.nl/uploads/{$remoteDir}/{$data['file_md5']}.{$data['file_extention']}");

		if($data['file_extention'] == 'pdf'){
			$handle = fopen(Config::get('files.path').$fileName, 'w');
			fwrite($handle, $remoteFile);
			fclose($handle);
		} else {

			// intervention image lib
			$manager = new ImageManager();
			
			try{
				// original
				$manager->make($remoteFile)->save( Config::get('files.path') . $fileName);

				// large
				$manager->make($remoteFile)->fit(500)->save( Config::get('files.images.large') . $fileName);

				// medium
				$manager->make($remoteFile)->fit(250)->save(Config::get('files.images.medium') .$fileName, 90);

				// thumbail
				$manager->make($remoteFile)->fit(80)->save( Config::get('files.images.thumbnails') .$fileName, 75);
			} catch (\Exception $e){
				$job->delete();
			}
		
		}

		// create file and projectfile (link)
		ProjectFile::create([
			'project_id'	=> $project->id,
			'files_id'		=>	
				Files::create([
					'fileHash'		=>	$fileName,
					'fileExtension'	=>	$data['file_extention']
				])->id
		]);

		$job->delete();
	}
}