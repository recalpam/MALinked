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
		return Response::json(Student::with(array('info', 'group', 'group.study'))->get(),200, array(), JSON_PRETTY_PRINT);
		//return Response::json(array('error' => true, 'message' => 'Illigal request: can not gather all students'));
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
		$student = Student::with(array('info', 'group', 'group.study'))->find($id);
		
		return Response::json($student, 200, array(), JSON_PRETTY_PRINT);
	}

	/**
	 * Update the specified student in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$student = Student::findOrFail(Auth::user()->id);

		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$student->push($data);

		return Response::json($student);
	}

	public function HobbiesEnGegevens(){
		$studentInfo = StudentInfo::where('student_id', '=', Input::get('id'))->firstOrFail();
		$studentInfo->email = Input::get('info.email');
		$studentInfo->location = Input::get('info.location');
		$studentInfo->portfolio = Input::get('info.portfolio');
		$studentInfo->linkedin = Input::get('info.linkedin');
		$studentInfo->dribbble = Input::get('info.dribbble');
		$studentInfo->behance = Input::get('info.behance');
		$studentInfo->vimeo = Input::get('info.vimeo');
		$studentInfo->youtube = Input::get('info.youtube');
		$studentInfo->youtube = Input::get('info.youtube');
		$studentInfo->hobbies = serialize(Input::get('info.hobbies'));

		$studentInfo->push();

		return 'Done';
	}

	public function UploadImage(){
		dd(Input::all());
	}

	

}
