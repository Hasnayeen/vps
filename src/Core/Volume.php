<?php

namespace Iluminar\VPS\Core;

class Volume extends VPS
{
    protected $endpoint = 'volumes';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}
