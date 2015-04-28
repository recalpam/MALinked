<?php namespace API;

use View, Validator, Redirect, Input, Student, Response;

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(
					array('error' => true, 'message' => 'No search query specified')
				);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $term
	 * @return Response
	 */
	public function show($term)
	{
		return Response::json(Student::search($term));
	}


}
