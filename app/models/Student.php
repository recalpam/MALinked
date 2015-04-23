<?php

class Student extends \Eloquent implements UserInterface, RemindableInterface  {

	use UserTrait, RemindableTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}