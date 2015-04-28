<?php namespace Recalpam\Butler;

use \File as F;
use \Config as C;
use \View as V;

class Butler {

	public function script($name){
		return F::get($this->js($name));
	}

	public function partial($name){
		return F::get($this->ptl($name));
	}

	private function ptl($name){
		return C::get('butler::dir.partials').$name.'.html';
	}
	private function js($name){
		return C::get('butler::dir.scripts').$name.'.js';
	}
}