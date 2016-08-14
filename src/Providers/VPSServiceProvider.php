<?php

namespace Iluminar\VPS\Providers;

use Illuminate\Support\ServiceProvider;

class VPSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/vps.php' => config_path('vps.php'),
        ], 'config');        
    }
}
