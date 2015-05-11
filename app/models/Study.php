<?php

class Study extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nameShort', 'nameFull'];

	public function groups()
	{
		return $this->hasMany('Group');
	}

}