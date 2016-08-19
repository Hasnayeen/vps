<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Size extends VPS
{
    protected $endpoint = 'sizes';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}