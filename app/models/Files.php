<?php

class Files extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'fileHash',
		'fileExtension',
		'fileName'
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'files';

}