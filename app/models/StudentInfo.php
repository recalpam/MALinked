<?php

class StudentInfo extends \Eloquent {
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'student_info';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

}