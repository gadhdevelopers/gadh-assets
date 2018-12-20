<?php

namespace Gadh\Assets;

use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/public' => public_path('vendor/gadh-assets'),
            ], 'public');


        $this->publishes([
                __DIR__.'/config/gadh-assets.php' => config_path('gadh-assets.php')
            ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
