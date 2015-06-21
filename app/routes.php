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

	/**
	 * Backend-oriented
	 */
	Route::group(array('prefix' => 'db'), function(){
		Route::resource('auth', 'API\AuthController@postLogin');
		Route::resource('auth.check', 'API\AuthController@checkLogin');

		Route::resource('study', 'API\StudiesController', array());
		Route::resource('study.groups', 'API\StudiesController@getGroupsByStudy', array());

		Route::resource('group', 'API\GroupsController',  array());
		Route::resource('group.students', 'API\GroupsController@getStudentsByGroup', array());

		Route::resource('search', 'API\SearchController',  array());

		Route::controller('sync', 'API\Sync');

		Route::resource('previewimage', 'API\Sync@previewimage', array());

		Route::group(array('before' => 'auth'), function(){
			Route::resource('student', 'API\StudentsController', array());
			Route::put('put/updateWhyMa', 'API\StudentsController@WaaromHetMa');
			Route::put('put/updateHobbiesEnGegevens', 'API\StudentsController@HobbiesEnGegevens');
			Route::post('put/image', 'API\StudentsController@UploadImage');
			Route::put('delete/file', 'API\StudentsController@DeleteFile');
			Route::put('put/updateFutureVision', 'API\StudentsController@updateFutureVision');
			Route::put('put/updateAboutSchool', 'API\StudentsController@updateAboutSchool');
			Route::put('put/updateProjects', 'API\StudentsController@updateProjects');
			Route::put('put/newProject', 'API\StudentsController@newProject');
			Route::put('put/deleteProject', 'API\StudentsController@deleteProject');
		});
	});

	/**
	 * Frontend-oriented
	 */
	Route::group(array('prefix' => 'frontend'), function(){
		Route::controller('file', 'API\Frontend\Asset');
		Route::controller('modal', 'API\Frontend\Modal');
	});
	
});


// Sitemap
Route::controller('sitemap.xml', 'API\Frontend\Sitemap');

/**
 * Dev4Donny (c)
 */
Route::get('donny', function(){
	//return Response::json(Group::with('study')->find(1), 200, array(), JSON_PRETTY_PRINT);
	//return Response::json(Student::with('group.study')->find(1), 200, array(), JSON_PRETTY_PRINT);
	//return Config::get('butler::dir.scripts');
	return Response::json(StudentInfo::all(), 200, array(), JSON_PRETTY_PRINT);
	
});

/**
 * Frontend
 */
Route::controller('/', 'API\Frontend\Page');

