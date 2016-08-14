<?php

namespace Iluminar\VPS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iluminar\VPS\VPS
 */
class VPS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Iluminar\VPS\Core\VPS';
    }
}
