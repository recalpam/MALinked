<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Student;

class StudentsController extends \BaseController {

	/**
	 * Display a listing of students
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Student::all());
	}

	/**
	 * Store a newly created student in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		return Response::json(Student::create($data));
	}

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Student::findOrFail($id));
	}

	/**
	 * Update the specified student in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$student = Student::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$student->update($data);

		return Response::json($student);
	}

}
