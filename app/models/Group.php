<?php

class Group extends \Eloquent {

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

}