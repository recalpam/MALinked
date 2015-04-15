<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/**
 * API
 * @uses /api/ prefix
 */
Route::group(['prefix' => 'api'], function(){

	/**
	 * Voorbeeldje voor Data/Model -> JSON
	 * @see http://malinked.dev/api/example
	 */
    Route::get('/example', function(){
       	return Response::json(
       		array('foo'	=>	'bar')
       	);
    });

});

/**
 * AngularJS voorbeeld dat gebruikt maakt van het hierboven gedefinieerde API geval
 * @see http://malinked.dev/api/example
 */
Route::get('/example', function(){
   return View::make('dev.voorbeeld');
});


/**
 * Index
 */
Route::get('/', function(){
   return "Hoi";
});