<?php

class Student extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static function search($term)
	{
		// Moet nog uitgebreider worden
		return Student::whereRaw('`nameFirst` like ? and `nameLast` like ?', array("%$term%", "%$term%"))->get();
	}
}