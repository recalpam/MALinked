<?php namespace API\Frontend;
use View, Config, Validator, Redirect, Input, Student, Response, Auth;

class Page extends \BaseController {

	/**
	 * Serve the base template view.
	 */
	public function getIndex(){
		return View::make('system.template');
	}
}