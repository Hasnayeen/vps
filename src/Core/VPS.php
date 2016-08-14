<?php

namespace Iluminar\VPS\Core;

use Illuminate\Support\Facades\Config;
use Iluminar\VPS\Core\VPSFactory;
use Iluminar\VPS\Core\Request;

class VPS
{
    protected $header;
    
    public function __construct()
    {
        $this->header = ['headers' => [
                "Authorization" => "Bearer " . Config::get('vps.digital_ocean.oauth_token')
            ]
        ];
    }

    public function setHeader()
    {
        $this->header = ['headers' => [
                "Authorization" => "Bearer " . Config::get('vps.digital_ocean.oauth_token')
            ]
        ];
    }

    public function __call($method, $params)
    {
        return $this->createClass($method);
    }

    public function createClass($name)
    {
        return VPSFactory::create($name);
    }

    public function account()
    {
        return Request::get(__FUNCTION__, $this->header);
    }
}