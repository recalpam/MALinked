<?php namespace Recalpam\Butler;

use \File as F;

class Butler {

	public function script($name){
		$file = app_path()."/views/js/{$name}.js";
		if(F::exists($file)){
			return F::get($file);
		}else{
			return false;
		}
	}
}