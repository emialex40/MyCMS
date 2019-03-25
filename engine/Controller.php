<?php
/**
 * Created by PhpStorm.
 * User: emial
 * Date: 25.03.2019
 * Time: 1:15
 */

namespace Engine;


use Engine\Di\DI;

abstract class Controller
{
    /**
     * @var Di
     */
    protected $di;

    protected $db;

    protected $view;

    protected $config;

    protected $request;

    public function __construct(DI $di)
    {
        $this->di      = $di;
        $this->view    = $this->di->get('view');
        $this->config  = $this->di->get('config');
        $this->request = $this->di->get('request');
    }
}