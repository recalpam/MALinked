<?php

class Files extends \Eloquent {	

	protected $appends = [
		'thumbnail',
		'medium',
		'large',
		'original'
	]; 

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'fileHash',
		'fileExtension',
		'fileName'
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'files';

	public function getThumbnailAttribute(){
		return url()."/dynamic/files/thumbnails/{$this->fileHash}.{$this->fileExtension}";
	}

	public function getMediumAttribute(){
		return url()."/dynamic/files/medium/{$this->fileHash}.{$this->fileExtension}";
	}

	public function getLargeAttribute(){
		return url()."/dynamic/files/large/{$this->fileHash}.{$this->fileExtension}";
	}

	public function getOriginalAttribute(){
		return url()."/dynamic/files/{$this->fileHash}.{$this->fileExtension}";
	}

	public static function userHasRights( $fileId, $userId = false){
		if( !$userId ){
			if( Auth::user()->id ){
				$userId = Auth::user()->id;
			} else {
				return false;
			}
		}

		// Is in user table
		$student = Student::where( 'file_id', '=', $fileId)
							->where( 'background_file_id', '=', $fileId, 'OR' )
							->where( 'id', '=', $userId, 'AND' )->get();

		if(count($student)){
			return true;
		}

		// Is a project file
		$project = ProjectFile::where( 'files_id', '=', $fileId)->get();

		if(count($project)){
			$projectResult = Project::where('id', '=', $project[0]->project_id)
							->where('student_id', '=', $userId, 'AND')->get();

			if(count($projectResult)){
				return true;
			}
		}

		return false;

	//	dd($file_id, $user_id);
	}
}