<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Volume extends VPS
{
    protected $endpoint = 'volumes';

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

    public function where($params)
    {
        $query = implode("&", $params);

        return Request::get($this->endpoint . '?' . $query, $this->header);
    }

    public function create($params)
    {
        return Request::post($this->endpoint, $params + $this->header);
    }
}