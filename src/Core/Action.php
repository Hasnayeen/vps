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

    public function all()
    {
        return Request::get($this->endpoint, $this->header);
    }

    public function find($id)
    {
        return Request::get($this->endpoint.'/'.$id, $this->header);
    }
}
