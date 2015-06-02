<?php namespace API\Frontend;
use View as V;
use Files as F;
use Response as R;
use Config, Validator, Redirect, Input, Student, Auth, Butler, ProjectFile;

class Modal extends \BaseController {

	/**
	 * NOPE
	 * @return NOPE
	 */
	public function getIndex(){
		return 'NOPE';
	}

	public function getGroup($id){
		$project = \Project::nestedSingle($id);
		if(isset($project->projectFile[0])) $project->file = $project->projectFile[0];
		foreach ($project->projectFile as $key => $value) {
			if(!$value) continue;
			if($value->fileExtension=="jpg" || $value->fileExtension=="png" || $value->fileExtension=="jpeg" || $value->fileExtension=="gif" ){
				$project->file = $value;
				$project->image = $value;
			}
		}
		//dd($project->image);

	  return V::make('template.modals.groep', ['project'  =>  $project]);
		//return Butler::script($name);
	}

	public function getGroupFile($id){
		$file = public_path().'/dynamic/files/'.F::find($id)->fileHash.'.'.F::find($id)->fileExtension;
		if(F::exists($file)){	
			return R::download($file);
		}else{
			return $file;
		}
	}
}

//api/frontend/modal/group/
//api/frontend/modal/group-file/$id
