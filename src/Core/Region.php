<?php

namespace Iluminar\VPS\Core;

class Region extends VPS
{
    protected $endpoint = 'regions';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}
