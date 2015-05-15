<?php
class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $table = 'project';

	public function projectFile()
	{
		return $this->belongsToMany('files', 'project_file');
	}

}