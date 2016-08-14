<?php

namespace Iluminar\VPS\Core;

use Iluminar\VPS\Core\VPS;

class Droplet extends VPS
{
    protected $endpoint = 'droplets';

    function __construct()
    {
        parent::setHeader();
    }
}