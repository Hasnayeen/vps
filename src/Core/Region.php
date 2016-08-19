<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Region extends VPS
{
    protected $endpoint = 'regions';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}