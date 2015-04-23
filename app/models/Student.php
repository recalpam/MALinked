<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface; 

class Student extends \Eloquent implements UserInterface, RemindableInterface  {

	use UserTrait, RemindableTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static function search($term)
	{
		// Moet nog uitgebreider worden
		return Student::whereRaw('`nameFirst` like ? and `nameLast` like ?', array("%$term%", "%$term%"))->get();
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

	public function group(){
		return $this->belongsTo('group');
	}

}