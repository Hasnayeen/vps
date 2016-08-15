<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Action extends VPS
{
    protected $endpoint = 'actions';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}