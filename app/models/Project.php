<?php
class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'project_id_old',
		'student_id',
		'title',
		'description',
		'url'
	];

	protected $table = 'project';

	public function projectFile()
	{
		return $this->belongsToMany('Files', 'project_file');
	}

	public static function nestedSingle($id){
		return self::with(array('projectFile'))->where('id' ,'=', $id)->firstOrFail();
	}

}
