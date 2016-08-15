<?php

namespace Iluminar\VPS\Core;

use Illuminate\Support\Facades\Config;

class VPS
{
    protected $header;

    public function __construct()
    {
        $this->header = ['headers' => [
                'Authorization' => 'Bearer '.Config::get('vps.digital_ocean.oauth_token'),
            ],
        ];
    }

    public function setHeader()
    {
        $this->header = ['headers' => [
                'Authorization' => 'Bearer '.Config::get('vps.digital_ocean.oauth_token'),
            ],
        ];
    }

    public function __call($method, $params)
    {
        return $this->createClass($method, $params);
    }

    public function createClass($name, $params)
    {
        return VPSFactory::create($name, $params);
    }

    public function account()
    {
        return Request::get(__FUNCTION__, $this->header);
    }

    public function all()
    {
        return Request::get($this->endpoint, $this->header);
    }

    public function find($id)
    {
        return Request::get($this->endpoint.'/'.$id, $this->header);
    }

    public function where(array $params)
    {
        $query = http_build_query($param);

        return Request::get($this->endpoint.'?'.$query, $this->header);
    }

    public function create($params)
    {
        return Request::post($this->endpoint, ['json' => $params] + $this->header);
    }

    public function delete($id)
    {
        return Request::delete($this->endpoint.'/'.$id, $this->header);
    }
}
