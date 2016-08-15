<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Volume extends VPS
{
    protected $endpoint = 'volumes';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}