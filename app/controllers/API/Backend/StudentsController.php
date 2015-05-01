<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Auth, StudentInfo, Group, Study;

class StudentsController extends \BaseController {

	/**
	 * Display a listing of students
	 *
	 * @return Response
	 */
	public function index()
	{
		//return Response::json(Student::all());
		return Response::json(array('error' => true, 'message' => 'Illigal request: cannon gather all students'));
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
		$student = array();
		$student = Student::findOrFail($id);
		$student['info'] = StudentInfo::where('student_id', '=', $id)->firstOrFail();
		$student['group'] = Group::findOrFail($student['group_id']);
		$student['study'] = Study::findOrFail($student['group']['study_id']);
		return Response::json($student, 200, array(), JSON_PRETTY_PRINT);
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
