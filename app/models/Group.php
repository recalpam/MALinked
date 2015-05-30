<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Group extends \Eloquent {

	use SluggableTrait;

	protected $sluggable = array(
		'save_to'		=> 'slug',
        'build_from' 	=> 'fullname',
        'unique'		=> true
    );

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function study(){
		return $this->belongsTo('Study');
	}

	public function students(){
		return $this->hasMany('Student');
	}

	public static function nested(){
		return self::with(array('students', 'students.file', 'study'));
	}

}