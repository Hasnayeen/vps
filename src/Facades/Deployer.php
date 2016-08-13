<?php

namespace Iluminar\Deployer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iluminar\Deployer\Deployer
 */
class Deployer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Iluminar\Deployer\Deployer';
    }
}
