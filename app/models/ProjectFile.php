<?php
class ProjectFile extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'project_id',
		'files_id'
	];

	protected $table = 'project_file';

	public $timestamps = false;

}