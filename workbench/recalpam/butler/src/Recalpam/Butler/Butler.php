<?php namespace Recalpam\Butler;
/**
 * Static file serving service with configurable directories.
 * 
 * @author Donny Hegener
 * @package Recalpam\Butler
 */

/**
 * Dependencies
 */
use \File as F;
use \Config as C;
use \View as V;
use \Response as R;

class Butler {

	/**
	 * File MIME types, used for generating the appropiate response header.
	 */
	private $mimes = array(
		'js'	=>	'text/javascript',
		'html'	=>	'text/html'
	);

	/**
	 * Serve single JS file.
	 * Default root location: 'app/views/js/'
	 * @param  string $name Name of the file (.js is appended automaticly)
	 * @return string       JS File
	 */

	public function script($name){
		$content = $this->read($this->js($name));
		if($content){
			return $this->serve($content, $this->mimes['js']);
		}	
	}

	/**
	 * Serve single HTML file.
	 * Default root location: 'app/views/pages/'
	 * @param  string $name Name of the file (.html is appended automaticly)
	 * @return string       HTML File
	*/
	public function partial($name){
		$content = $this->read($this->ptl($name));
		if($content){
			return $this->serve($content, $this->mimes['html']);
		}
	}

	/**
	 * HTML Path formatter.
	 * @param string $name Name of the file to format to a path.
	 * @return string The formatted path.
	 */
	private function ptl($name){
		return C::get('butler::dir.partials').$name.'.html';
	}

	/**
	 * JS Path formatter.
	 * @param string $name Name of the file to format to a path.
	 * @return string The formatted path.
	 */
	private function js($name){
		return C::get('butler::dir.scripts').$name.'.js';
	}

	/**
	 * Read any file from the local system.
	 * @param string $path Full path to the file.
	 * @return string If the file exists, return its contents.
	 * @return bool If the file doesn't exist, it will return false.
	 */
	private function read($path){
		if(!file_exists($path)) return false;
		return F::get($path);
	}

	/**
	 * Serve a custom response with the appropiate headers.
	 * @param string $content 
	 * @param string $mime 
	 * @return Response
	 */
	private function serve($content, $mime){
		$response = R::make($content, 200);
		$response->header('Content-Type', $mime);
		return $response;
	}
}