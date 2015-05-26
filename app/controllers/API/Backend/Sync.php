<?php namespace API;
use View, Validator, Redirect, Input, Student, Response, Auth, StudentInfo, Group, Study, Project, Cache, File;
class Sync extends \BaseController {
	public function getIndex(){
		
		/*$path = app_path().'/storage/cache/sync.json';

		if(!File::exists($path)){

			$data = new \stdClass;
			$data->students = Student::nested()->get();
			$data->studies = Study::all();
			$data->group = Group::all();
			File::put($path, json_encode($data));
		}
		

		$ret = File::get($path);
		//File::delete($path);
		return $ret;*/

		/*Cache::forget('API\Sync');*/

		$data = new \stdClass;
		$data->students = Student::nested()->get();
		$data->studies = Study::all();
		$data->group = Group::all();

		//Cache::forever('API\Sync', json_encode($data));

		/*$cache = Cache::rememberForever('API\Sync', function(){
			
		});*/

		//return \url("123");
		//file_get_contents(app_path());
		//return Response::make(Cache::get('API\Sync'), 200, ['content-type'	=>	'text/json']);

		return Response::json($data, 200, array(), JSON_PRETTY_PRINT);
		
	}
}