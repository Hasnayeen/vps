<?php

namespace Iluminar\Deployer;

class Deployer
{
    protected $token;
    protected $header;
    
    public function __construct()
    {
        $this->token = Config::get('digital_ocean.oauth_token');
        $this->header = ['header' => [
                'Aurhorization' => "Bearer {$this->token}"
            ]
        ];
    }

    public function account()
    {
        Request::get(__FUNCTION__, $this->header);
    }
}