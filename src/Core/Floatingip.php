<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Floatingip extends VPS
{
    protected $endpoint = 'floating_ips';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}