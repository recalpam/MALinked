<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Group, Study;

class GroupsController extends \BaseController {

	/**
	 * Display a listing of groups
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Group::all(), 200, array(), JSON_PRETTY_PRINT);
	}

	/**
	 * Store a newly created group in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Group::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		return Response::json(Group::create($data));
	}

	/**
	 * Display the specified group.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Group::findOrFail($id), 200, array(), JSON_PRETTY_PRINT);
	}

	/**
	 * Update the specified group in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$group = Group::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Group::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$group->update($data);

		return Response::json($group);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @param  int  $second  no use at all
	 * @return Response
	 */
	public function getStudentsByGroup($id, $second = null)
	{
		return Response::json( array(
			'group'		=> Group::where('id', '=', $id)->get(), 
			'students'	=> Student::where('group_id', '=', $id)->get() 
		), 200, array(), JSON_PRETTY_PRINT);
	}

}
