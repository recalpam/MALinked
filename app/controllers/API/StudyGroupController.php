<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Group;

class StudyGroupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return Response::json( Group::where('study_id', '=', $id)->get() );
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @param  int  $second  no use at all
	 * @return Response
	 */
	public function show($id, $second)
	{
		return Response::json( Group::where('study_id', '=', $id)->get() );
	}


}
