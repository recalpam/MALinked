<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/**
 * Prefix group for the api
 */
Route::group(array('prefix' => 'api', 'except' => array('create', 'edit', 'destroy')), function(){

	Route::resource('student', 'API\StudentsController', array());
	Route::controller('auth', 'API\AuthController');

	Route::resource('study', 'API\StudiesController', array());
	Route::resource('study.groups', 'API\StudiesController@getGroupsByStudy', array());	

	Route::resource('group', 'API\GroupsController',  array());
	Route::resource('group.students', 'API\GroupsController@getStudentsByGroup', array());

	Route::resource('search', 'API\SearchController',  array());


});


/**
 * Dev4Donny (c)
 */
Route::get('donny', function(){
	ini_set('xdebug.remote_autostart', 0);
	return Response::json(Student::with('group')->find(1), 200, array(), JSON_PRETTY_PRINT);
});

/**
 * Frontend
 */
Route::get('/', function(){
	return 'cool frontend here';
});


