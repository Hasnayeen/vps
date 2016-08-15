<?php

namespace Iluminar\VPS\Core;

class VPSFactory
{
    public static function create($name, $id = null)
    {
        $id = ($id) ? $id[0] : null;
        $class = "Iluminar\VPS\Core\\".ucfirst($name);

        return new $class($id);
    }
}
