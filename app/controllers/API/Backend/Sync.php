<?php namespace API;
use View, Validator, Redirect, Input, Student, Response, Auth, StudentInfo, Group, Study, Project, Cache, File;
use Intervention\Image\ImageManager;

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
		$data->studies = Study::nested()->get();
		$data->group = Group::all();

		//Cache::forever('API\Sync', json_encode($data));

		/*$cache = Cache::rememberForever('API\Sync', function(){
			
		});*/

		//return \url("123");
		//file_get_contents(app_path());
		//return Response::make(Cache::get('API\Sync'), 200, ['content-type'	=>	'text/json']);

		return Response::json($data, 200, array(), JSON_PRETTY_PRINT);
		
	}

	// Ugly ass misplaced function
	public function previewimage(){
		//dd( file_get_contents('http://a2.mzstatic.com/us/r30/Purple/v4/3d/55/2d/3d552daf-b7cd-6a2c-8c39-876ba65a4156/screen800x500.jpeg') );
		$manager = new ImageManager();

		$filebuffer = Input::get('image');
		$explode = explode(',', $filebuffer);
		$filebuffer = $explode[1];

		

		switch( Input::get('type') ){
			case 'large':
				// large
				$contents = $manager->make($filebuffer)->fit(500);
			 break;
			case 'medium':
				// medium
				$contents = $manager->make($filebuffer)->fit(250);
			 break;
			case 'thumbail':
				// thumbail
				$contents = $manager->make($filebuffer)->fit(80);
			 break;
			default:
			 exit;
		}

		$response = Response::make($contents->encode('png'));

	    // set content-type
	    $response->header('Content-Type', 'image/png');

		return $response;

	}
}