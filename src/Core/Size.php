<?php

namespace Iluminar\VPS\Core;

class Size extends VPS
{
    protected $endpoint = 'sizes';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}
