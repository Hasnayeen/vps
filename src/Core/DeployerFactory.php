<?php

namespace Iluminar\Deployer\Core;

class DeployerFactory
{
    public static function create($name, $param = null)
    {
        $class = "Iluminar\Deployer\Core\\".ucfirst($name);

        return new $class();
    }
}
