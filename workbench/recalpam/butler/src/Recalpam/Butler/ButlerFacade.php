<?php namespace Recalpam\Butler;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Filesystem\Filesystem
 */
class ButlerFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'butler'; }

}
