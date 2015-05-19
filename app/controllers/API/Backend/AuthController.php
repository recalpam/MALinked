<?php namespace API;

use GuzzleHttp\Client;
use View, Validator, Redirect, Input, Student, Response, Auth;

class AuthController extends \BaseController {
	private $student, $password, $studentResult;

	public function postLogin()
	{
		$this->student = Input::get('student');
		$this->password = Input::get('password');

		// Check if data is set
		if( !$this->student || !$this->password ){
			return Response::json(array(
				'error' => true,
				'message' => 'Missing username and/or password'
			));
		}

		// Check if user is registered
		try{
			$this->studentResult = Student::where('student', '=', $this->student)->firstOrFail();
		} catch (\Exception $e) {
			return Response::json(array(
				'error' => true,
				'message' => 'Student not found'
			));
		}
		
		if ( !$this->studentResult->password ){
			if( !$this->registerUser() ){
				return Response::json(array(
					'error' => true,
					'message' => 'Incorrect password'
				));
			}
		}

		// Check for authentication
		if( Auth::attempt(array('student' => $this->student, 'password' => md5($this->password)), true) ){
			return Response::json(array(
				'error' => false,
				'message' => 'Session created',
				'token' => Auth::user()->remember_token,
				'student' => Auth::user()->with(array('info', 'group', 'group.study'))->get()
			));
			
		}
		return;
	}

	private function registerUser()
	{
		// Ma-net login
		$client = new Client();
		try{
			$response = $client->get('http://ma-net.nl', 
							array('config' => array(
									'curl' => array(
										CURLOPT_HTTPAUTH => CURLAUTH_NTLM,
										CURLOPT_USERPWD => $this->student.':'.$this->password,
										CURLOPT_SSL_VERIFYPEER => false,
										CURLOPT_SSL_VERIFYHOST => 2
									)
								)
							));
		} catch(\Exception $e) {
			return false;
		}
		$this->studentResult->password = \Hash::make(md5($this->password));
		$this->studentResult->save();
		return true;
	}

}
