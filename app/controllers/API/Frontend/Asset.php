<?php namespace API\Frontend;
use View as V;
use File as F;
use Config, Validator, Redirect, Input, Student, Response, Auth, Butler;

class Asset extends \BaseController {

	/**
	 * NOPE
	 * @return NOPE
	 */
	public function getIndex(){
		return 'NOPE';
	}

	/**
	 * Return a JS file.
	 * Default root location: 'app/views/js/'
	 * @param  string $name Name of the file (.js is appended automaticly)
	 * @return string       JS File
	 */
	public function getScript($name=''){
		return Butler::script($name);
	}

	/**
	 * Return a HTML file.
	 * Default root location: 'app/views/pages/'
	* @param  string $name Name of the file (.html is appended automaticly)
	 * @return string       HTML File
	 */
	public function getView($name=''){
		return Butler::partial($name);
	}
}