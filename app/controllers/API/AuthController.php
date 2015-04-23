<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Auth;

class AuthController extends \BaseController {

	public function postLogin()
	{
		$student = Input::get('student');
		$password = Input::get('password');

		// Check if data is set
		if( !$student || !$password ){
			return Response::json(array(
				'error' => true,
				'message' => 'Missing username and/or password'
			));
		}

		// Check if user is registered
		$studentResult = Student::where('student', '=', $student)->firstOrFail();

		if ( $studentResult->password == 0){
			return 'geen passowrd';
		}

		// Check for authentication
		if( Auth::attempt(array('student' => $student, 'password' => md5($password))) ){
			return 'true';
		}
		return 'false';
	}

}
