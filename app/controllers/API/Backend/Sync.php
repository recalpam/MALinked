<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Auth, StudentInfo, Group, Study;

class Sync extends \BaseController {

	public function getIndex(){
		$data = new \stdClass;
		$data->students = Student::nested()->get();
		$data->studies = Study::all();
		$data->group = Group::all();
		return Response::json($data, 200, array(), JSON_PRETTY_PRINT);
	}
}