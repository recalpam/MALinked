<?php

class Files extends \Eloquent {	

	protected $appends = [
		'thumbnail',
		'medium',
		'large'
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

}