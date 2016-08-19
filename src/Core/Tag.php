<?php

namespace Iluminar\VPS\Core;

class Tag extends VPS
{
    protected $endpoint = 'tags';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }

    public function rename($name)
    {
        return Request::put($this->endpoint.'/'.$this->id, ['json' => ['name' => $name]] + $this->header);
    }
}
