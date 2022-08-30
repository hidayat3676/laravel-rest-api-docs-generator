<?php

namespace Hidayat\ApiDocs;

use Illuminate\Support\ServiceProvider;

class RestApiDocServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'api_docs');


        $this->publishes([
            __DIR__ . '/../config/api_docs.php' => config_path('api_docs.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/api_docs'),
        ]);

        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/api_docs'),
        ]);
    }

}
