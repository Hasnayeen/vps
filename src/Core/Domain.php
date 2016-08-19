<?php

namespace Iluminar\VPS\Core;

class Domain extends VPS
{
    protected $endpoint = 'domains';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }

    public function records()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function record()
    {
        $this->endpoint .= $this->id.'/records';

        return $this;
    }

    public function create($param)
    {
        return Request::post($this->endpoint, ['json' => $params] + $this->header);
    }

    public function get($id)
    {
        return Request::get($this->endpoint.'/'.$this->id, $this->header);
    }

    public function update($id, $params)
    {
        return Request::put($this->endpoint.'/'.$this->id, ['json' => $params] + $this->header);
    }

    public function delete($id)
    {
        return Request::delete($this->endpoint.'/'.$this->id, $this->header);
    }
}
