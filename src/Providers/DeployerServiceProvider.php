<?php

namespace Iluminar\Deployer\Providers;

use Illuminate\Support\ServiceProvider;

class DeployerServiceProvider extends ServiceProvider
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
            __DIR__.'/../config/deployer.php' => config_path('deployer.php'),
        ], 'config');        
    }
}
