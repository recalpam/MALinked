<?php namespace Recalpam\Butler;

use Illuminate\Support\ServiceProvider;

class ButlerServiceProivder extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('assetmanager', function() { return new AssetManager; });
	}

	public function boot(){

	}

}
