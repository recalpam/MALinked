<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Study;

class StudiesController extends \BaseController {

	/**
	 * Display a listing of studies
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Study::all());
	}

	/**
	 * Store a newly created study in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Study::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		return Response::json(Study::create($data));
	}

	/**
	 * Display the specified study.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Study::findOrFail($id));
	}

	/**
	 * Update the specified study in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$study = Study::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Study::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$study->update($data);

		return Response::json($study);
	}

}
