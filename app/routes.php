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
Route::group(array('prefix' => 'api'), function(){

	Route::get('/', function()
	{
		return Response::json(array('reply' => 'oh hi there'));
	});

});

/**
 * Frontend
 */
Route::get('/', function(){
	return 'cool frontend here';
});


