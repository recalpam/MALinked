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
	Route::resource('study', 'API\StudiesController', array());
	Route::resource('group', 'API\GroupsController', array());


});

/**
 * Frontend
 */
Route::get('/', function(){
	return 'cool frontend here';
});


