<?php

require __DIR__ . "/../vendor/autoload.php";

use Engine\Cms;
use Engine\Di\DI;


try {
    //dependency injection
    $di = new DI();

    //init services
    $services = require __DIR__ .'/Config/Servise.php';

    foreach($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();

} catch(\ErrorException $e)
{
    echo $e->getMessage();
};
