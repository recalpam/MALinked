<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface; 


class Student extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static function search($term)
	{
		return DB::select( DB::raw("select `students`.`id` as `studentID`, `students`.`nameFirst` as `studentFirstname`, `students`.`nameInsertion` as `studentInsertion`, `students`.`nameLast` as `studentLastname`, `groups`.`name` as `groupName`, `groups`.`fullname` as `groupNameFull`, `studies`.`name` as `studyName`, `studies`.`color` as `studyColor` from `students` left join `groups` on `students`.`group_id` = `groups`.`id` left join `studies` on `groups`.`study_id` = `studies`.`id` where CONCAT_WS(' ', `nameFirst`, `nameInsertion`, `nameLast`) LIKE '%$term%' OR CONCAT_WS(' ', `nameFirst`, `nameLast`) LIKE '%$term%' limit 25 offset 0" ) );
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public static function getComplete($id)
	{
		$student = array();
		$student = Student::find($id)->firstOrFail();
		$student['info'] = StudentInfo::where('student_id', '=', $id)->firstOrFail();
		$student['group'] = Group::find($student['group_id'])->firstOrFail();
		$student['study'] = Study::find($student['group']['study_id'])->firstOrFail();
		return $student;
	}

	public static function nested(){
		return self::with(array('info', 'group', 'group.study', 'file', 'projects', 'projects.projectFile'));
	}

	public function info()
	{
		return $this->hasOne('StudentInfo');
	}

	public function file()
	{
		return $this->belongsTo('Files');
	}

	public function group()
	{
		return $this->belongsTo('Group');
	}

	public function study()
	{
		return $this->group->study;
	}

	public function projects()
	{
		return $this->hasMany('project');
	}

}