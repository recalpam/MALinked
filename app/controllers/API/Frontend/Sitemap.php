<?php namespace API\Frontend;
use View, Config, Validator, Redirect, Input, Student, Response, Auth, App, URL, Study, Group;
class Sitemap extends \BaseController {

	/**
	 * Serve the base template view.
	 */
  public function getIndex(){
  	$sitemap = App::make("sitemap");
  	$sitemap->add(URL::to('/'), '2015-06-22 00:55:31.000000', '1.0', 'monthly');

  	$data = new \stdClass;
	$data->students = Student::nested()->get();
	$data->studies = Study::nested()->get();
	$data->groups = Group::nested()->get();

	// Do the students
	foreach($data->students as $student){
		$sitemap->add(URL::to('/profiel/'. $student->group->slug .'/'. $student->slug), $student->info->updated_at, '0.8', 'daily');
	}

	// Do the studies
	foreach($data->studies as $study){
		$sitemap->add(URL::to('/opleiding/'. $study->slug), $study->updated_at, '0.8', 'monthly');
	}

	// Do the groups
	foreach($data->groups as $group){
		$sitemap->add(URL::to('/klas/'. $group->slug), $group->updated_at, '0.8', 'monthly');
	}

    return $sitemap->render('xml');
  }
  
}