<?php

namespace Iluminar\VPS\Core;

class VPSFactory
{
    public static function create($name)
    {
        $class = "Iluminar\VPS\Core\\".ucfirst($name);

        return new $class();
    }
}
