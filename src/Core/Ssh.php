<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Ssh extends VPS
{
    protected $endpoint = 'account/keys';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }

    public function rename($name)
    {
        return Request::put($this->endpoint . '/' . $this->id, ['json' => ['name' => $name]] + $this->header);
    }
}