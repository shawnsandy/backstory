<?php

namespace ShawnSandy\Backstory;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Spatie\Html\HtmlServiceProvider;



/**
Class Provider
 * @package ShawnSandy\Backstory
 */
class BackstoryServicesProvider extends ServiceProvider
{


	/**
	* Perform post-registration booting of services.
		     *
		     * @return void
		     */
		    public function boot()
		    {




		/**
		* Package views
				         */
				        $this->loadViewsFrom(__DIR__ . '/resources/views', 'backstory');
		$this->publishes(
				            [
				                __DIR__ . '/resources/views' => resource_path('views/vendor/backstory'),
				            ], 'backstory-views'
				        );



		/**
		* Package assets
				         */
				        $this->publishes(
				            [

				                __DIR__.'/resources/assets/sass' => public_path('assets/backstory'),
				                __DIR__.'/../node_modules/ckeditor' => public_path('assets/backstory/ckeditor/'),
				            ], 'backstory-assets'
				        );




		/**
		* Package resources to resources
				         */
				        $this->publishes(
				            [
				                __DIR__.'/resources/assets/' => resource_path('assets/backstory'),
				            ], 'backstory-resources'
				        );



		/**
		* Package config
				         */
				        $this->publishes(
				            [__DIR__ . '/config/config.php' => config_path('backstory.php')],
				            'backstory-config'
		                );


		$this->publishes([
		            __DIR__ . '/migrations/' => database_path('migrations')
		        ], 'backstory-migrations');


		$this->loadMigrationsFrom(__DIR__ . '/migrations');

		if (!$this->app->runningInConsole()) :
				            include_once __DIR__ . '/Helpers/helper.php';
		endif;

		$this->loadProviders();
		$this->loadAliases();



	}



	/**
	* Register any package services.
		     *
		     * @return void
		     */
		    public function register()
		    {

		$this->mergeConfigFrom(
				            __DIR__ . '/config/config.php', 'backstory'
				        );

		$this->app->bind(
				        'Backstory', function () {
			return new Backstory();
		}
		);

		$this->registerFactoriesPath(__DIR__.'/factories');

	}




	/**
	* Register factories.
		    *
		    * @param  string  $path
		    * @return void
		    */
		    protected function registerFactoriesPath($path)
		    {
		$this->app->make(Factory::class)->load($path);
	}


	public function loadProviders()
		        {



		/*
		* load service providers
				             */

		// 		$this->app->register(\Collective\Html\HtmlServiceProvider::class);
        $this->app->register(HtmlServiceProvider::class);





		/*
		* Dev resources
				             */

		if ($this->app->environment() !== "production") {




		}


	}

	public function loadAliases() {




		/*
		* Load aliases / facades
				             */
				            $aliases = \Illuminate\Foundation\AliasLoader::getInstance();

		// 		$aliases->alias("Html", \Collective\Html\HtmlFacade::class);




		/*
		* Dev resources
				           */

		if ($this->app->environment() !== "production") {

			//$			aliases->alias('Debugbar', 'Barryvdh\Debugbar\Facade');

		}


	}


}
