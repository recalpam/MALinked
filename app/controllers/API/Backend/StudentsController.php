<?php namespace API;

use View, Validator, Redirect, Input, Student, Response, Auth, StudentInfo, Group, Study, Files, Config, DB, ProjectFile, Project;
use Intervention\Image\ImageManager;

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

	public function WaaromHetMa(){
		$studentInfo = StudentInfo::where('student_id', '=', Input::get('id'))->firstOrFail();
		$studentInfo->why_ma = Input::get('info.why_ma');

		$studentInfo->push();

		return 'Done';
	}

	public function updateFutureVision(){
		$studentInfo = StudentInfo::where('student_id', '=', Input::get('id'))->firstOrFail();
		$studentInfo->future_vision = Input::get('info.future_vision');

		$studentInfo->push();

		return 'Done';
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
		$studentInfo->facebook = Input::get('info.facebook');

		$hobbies = serialize(Input::get('info.hobbies'));
		$studentInfo->hobbies = $hobbies;

		$studentInfo->push();

		return 'Done';
	}

	public function updateAboutSchool(){
		$studentInfo = StudentInfo::where('student_id', '=', Auth::user()->id)->firstOrFail();

		$fav_teacher = serialize(Input::get('info.fav_teacher'));
		$studentInfo->fav_teacher = $fav_teacher;

		$studentInfo->fav_project = Input::get('info.fav_project');
		$studentInfo->fav_class = Input::get('info.fav_class');
		$studentInfo->best_experience = Input::get('info.best_experience');
		$studentInfo->rate_school = Input::get('info.rate_school');
		$studentInfo->rate_internship = Input::get('info.rate_internship');
		$studentInfo->school_match_ambitions = Input::get('info.school_match_ambitions');

		$studentInfo->push();

		return 'Done';
	}

	public function UploadImage(){
		if( $_FILES ){
			$file = $_FILES['file'];
			$type = explode('/', $file['type']);
			$type = end($type);

			if( $type != 'png' && $type != 'jpeg' && $type != 'jpg' && $type != 'pdf' ){
				exit;
			}

			$fileName = md5($file['name'].rand(0,99999).time());

			switch( Input::get('type') ){
				case 'header':
					$this->proccessHeaderImage($file['tmp_name'], $fileName, $type);
				 break;
				case 'profile':
					$this->proccessProfileImage($file['tmp_name'], $fileName, $type);
				 break;
				case 'project':
					$this->proccessProjectFile($file['tmp_name'], $fileName, $type, $file['name'], Input::get('projectid'));
				 break;
				default:
					exit;
				 break;
			}
			
		}
	}

	private function proccessHeaderImage($fileTmp, $fileName, $type){
		$student = Auth::user();
		$manager = new ImageManager();
		$fullFilename = $fileName .'.'. $type;

		$manager->make($fileTmp)->save( Config::get('files.path') . $fullFilename, 90);

		$insert = array(
			'fileHash' => $fileName,
			'fileExtension' => $type,
			'fileName' => 'Header foto van '. $student->nameFirst
		);

		// Link stored file to student
		if( DB::table('files')->insert($insert) ){
			$file_id = DB::getPdo()->lastInsertId();
			$student->background_file_id = $file_id;
			$student->push();
		}
	}

	private function proccessProfileImage($fileTmp, $fileName, $type){
		$student = Auth::user();
		$manager = new ImageManager();
		$fullFilename = $fileName .'.'. $type;
		// original
		$manager->make($fileTmp)->save( Config::get('files.path') . $fullFilename, 90);
		// large
		$manager->make($fileTmp)->fit(500)->save( Config::get('files.images.large') . $fullFilename, 90);
		// medium
		$manager->make($fileTmp)->fit(250)->save(Config::get('files.images.medium') .$fullFilename, 90);
		// thumbail
		$manager->make($fileTmp)->fit(80)->save( Config::get('files.images.thumbnails') .$fullFilename, 75);

		$insert = array(
			'fileHash' => $fileName,
			'fileExtension' => $type,
			'fileName' => 'Profielfoto van '. $student->nameFirst
		);

		// Link stored file to student
		if( DB::table('files')->insert($insert) ){
			$file_id = DB::getPdo()->lastInsertId();
			$student->file_id = $file_id;
			$student->push();
		}
		
	}

	private function proccessProjectFile($fileTmp, $fileName, $type, $name, $projectid){
		$student = Auth::user();

		$fullFilename = $fileName .'.'. $type;

		if( $type == 'pdf' ){
			$handle = fopen(Config::get('files.path').$fullFilename, 'w');
			fwrite($handle, file_get_contents($fileTmp));
			fclose($handle);
		} else {
			$manager = new ImageManager();
			// original
			$manager->make($fileTmp)->save( Config::get('files.path') . $fullFilename, 90);
			// large
			$manager->make($fileTmp)->fit(500)->save( Config::get('files.images.large') . $fullFilename, 90);
			// medium
			$manager->make($fileTmp)->fit(250)->save(Config::get('files.images.medium') .$fullFilename, 90);
			// thumbail
			$manager->make($fileTmp)->fit(80)->save( Config::get('files.images.thumbnails') .$fullFilename, 75);
		}
		

		$insert = array(
			'fileHash' => $fileName,
			'fileExtension' => $type,
			'fileName' => $name
		);

		// Link stored file to student
		if( DB::table('files')->insert($insert) ){
			$file_id = DB::getPdo()->lastInsertId();
			ProjectFile::create( array(
				'project_id' => $projectid,
				'files_id' => $file_id
			) );
		}

		dd($file_id);
		
	}

	public function DeleteFile(){
		if( Input::get('file_id') ){
			$file_id = Input::get('file_id');
			if( Files::userHasRights( $file_id ) ){
				$file = ProjectFile::where('files_id', '=', $file_id);
				$file->delete();
				die('deleted');
			}
		}
	}

	public function updateProjects(){
		foreach( Input::all() as $projectPost ){
			if( $projectPost['id'] && isset($projectPost['id']) ){
				// Update
				$project = Project::where('id', '=', $projectPost['id'])->firstOrFail();
				$project->title = $projectPost['title'];
				$project->description = $projectPost['description'];
				$project->url = $projectPost['url'];

				$project->push();

				
			} else {
				// Insert
			}
		}
		die('Updated');
	}

	public function newProject(){
		$insert = array();
		$insert['student_id'] = Auth::user()->id;
		$insert['title'] = 'Projectnaam';
		$insert['description'] = 'Super awesome project';
		$insert['url'] = 'http://www.youtu.be/';

		Project::insert($insert);

		die('Inserted');
	}

	public function deleteProject(){
		$hasRights = Project::where('id', '=', Input::get('id'))
							->where('student_id', '=', Auth::user()->id, 'AND')->get();

		if( count($hasRights) ){
			$hasRights[0]->delete();
		}

		die('Deleted');
	}

	

}
