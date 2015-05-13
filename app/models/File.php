<?php

class File extends \Eloquent {

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
	protected $table = 'files';

}