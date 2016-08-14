<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Action extends VPS
{
    protected $endpoint = 'actions';

    function __construct()
    {
        parent::setHeader();
    }

    public function all()
    {
        return Request::get($this->endpoint, $this->header);
    }

    public function find($id)
    {
        return Request::get($this->endpoint . '/' . $id, $this->header);
    }
}