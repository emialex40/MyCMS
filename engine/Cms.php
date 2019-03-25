<?php

namespace Engine;

use Engine\Helper\Common;

class Cms
{
    /**
     * @var
     */
    private $di;

    private $router;

    /**
     * cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     *
     */
    public function run()
    {

        $this->router->add('home', '/', 'HomeController:index' );
        $this->router->add('product', '/user/12', 'ProductController:index' );

        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());


        print_r($routerDispatch);


//        print_r($this->di);
//        print_r($_SERVER);

    }
}