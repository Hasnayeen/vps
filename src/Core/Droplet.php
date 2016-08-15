<?php

namespace Iluminar\VPS\Core;

class Droplet extends VPS
{
    protected $endpoint = 'droplets';
    protected $id;

    public function __construct($id)
    {
        parent::setHeader();
        $this->id = $id;
    }

    public function kernels()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function snapshots()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function backups()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function actions()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function neighbors()
    {
        return Request::get($this->endpoint.'/'.$this->id.'/'.__FUNCTION__, $this->header);
    }

    public function hardwareNeighbors()
    {
        return Request::get(str_replace('droplets', 'reports', $this->endpoint).'/neighbors', $this->header);
    }

    public function enableBackups()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'enable_backups']] + $this->header);
    }

    public function disableBackups()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'disable_backups']] + $this->header);
    }

    public function reboot()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'reboot']] + $this->header);
    }

    public function powerCycle()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'power_cycle']] + $this->header);
    }

    public function shutdown()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'shutdown']] + $this->header);
    }

    public function powerOff()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'power_off']] + $this->header);
    }

    public function powerOn()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'power_on']] + $this->header);
    }

    public function restore($imageId)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'restore', 'image' => $imageId]] + $this->header);
    }

    public function passwordReset()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'password_reset']] + $this->header);
    }

    public function resize($size, $disk = false)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'resize', 'size' => $size, 'disk' => $disk]] + $this->header);
    }

    public function rebuild($image)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'rebuild', 'image' => $image]] + $this->header);
    }

    public function rename($name)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'rename', 'name' => $name]] + $this->header);
    }

    public function changeKernel($kernel)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'change_kernel', 'kernel' => $kernel]] + $this->header);
    }

    public function enableIPv6()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'enable_ipv6']] + $this->header);
    }

    public function enablePrivateNetworking()
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'enable_private_networking']] + $this->header);
    }

    public function takeSnapshot($name)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::post($this->endpoint, ['json' => ['type' => 'snapshot', 'name' => $name]] + $this->header);
    }

    public function action($id)
    {
        $this->endpoint .= '/'.$this->id.'/actions';

        return Request::get($this->endpoint, $this->header);
    }
}
