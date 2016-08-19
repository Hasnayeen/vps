<?php

namespace Iluminar\VPS\Core;

class Floatingip extends VPS
{
    protected $endpoint = 'floating_ips';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}
