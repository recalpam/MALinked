<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Study extends \Eloquent {

	use SluggableTrait;

	protected $sluggable = array(
		'save_to'		=> 'slug',
        'build_from' 	=> 'name',
        'unique'		=> true
    );

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['color', 'name'];

	public function groups()
	{
		return $this->hasMany('Group');
	}

}