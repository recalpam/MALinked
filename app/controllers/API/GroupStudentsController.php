<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Group;

class GroupStudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return Response::json( array( 
			'group' => Group::where('id', '=', $id)->get(), 
			'students' => Student::where('group_id', '=', $id)->get() 
		));
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
		return Response::json( array( 
			'group' => Group::where('id', '=', $id)->get(), 
			'students' => Student::where('group_id', '=', $id)->get() 
		));
	}


}
