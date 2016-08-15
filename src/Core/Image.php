<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Image extends VPS
{
    protected $endpoint = 'images';
    protected $id;

    function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }

    public function actions()
    {
        return Request::get($this->endpoint . '/' . $this->id . '/' . __FUNCTION__, $this->header);
    }

    public function rename($name)
    {
        return Request::put($this->endpoint . '/' . $this->id, ['json' => ['name' => $name]] + $this->header);
    }

    public function transfer($region)
    {
        $this->endpoint .= '/' . $this->id . '/actions';
        
        return Request::post($this->endpoint, ['json' => ['type' => 'transfer', 'region' => $region]] + $this->header);
    }

    public function convert()
    {
        $this->endpoint .= '/' . $this->id . '/actions';
        
        return Request::post($this->endpoint, ['json' => ['type' => 'convert']] + $this->header);
    }
}