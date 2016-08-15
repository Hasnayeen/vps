<?php

namespace Iluminar\VPS\Core;

class Action extends VPS
{
    protected $endpoint = 'actions';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }
}
