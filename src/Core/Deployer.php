<?php

namespace Iluminar\Deployer\Core;

use Illuminate\Support\Facades\Config;
use Iluminar\Deployer\Core\DeployerFactory;
use Iluminar\Deployer\Core\Request;

class Deployer
{
    protected $token;
    protected $header;
    
    public function __construct()
    {
        $token = Config::get('deployer.digital_ocean.oauth_token');
        $this->token = $token;
        $this->header = ['headers' => [
                "Authorization" => "Bearer $token"
            ]
        ];
    }

    public function __call($method, $parameters)
    {
        return $this->createClass($method, $parameters[0]);
    }

    public function createClass($name, $params)
    {
        return DeployerFactory::create($name, [$this->user->token, $params]);
    }

    public function account()
    {
        return Request::get(__FUNCTION__, $this->header);
    }
}