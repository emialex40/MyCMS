<?php

namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;

class Provider extends AbstractProvider
{
    public $serviceName = 'request';

    public function init()
    {
        $reuest = new Request();

        $this->di->set($this->serviceName, $reuest);
    }
}