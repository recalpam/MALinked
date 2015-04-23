<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Auth;

class AuthController extends \BaseController {

	public function postIndex()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		if( !$username || !$password ){
			return Response::json(array(
				'error' => true,
				'message' => 'Missing username and/or password'
			));
		}

		$student = Student::where('student', '=', $username)->get();

		//return $student;
		//if( $student->password )

		if( Auth::attempt(array('student' => $username, 'password' => md5($password))) ){

		}
	}

}
