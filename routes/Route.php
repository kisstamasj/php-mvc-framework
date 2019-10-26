<?php

namespace routes;

use controllers\Controller;
use middlewares\Middleware;

class Route
{
    /**
     * The URL of the route
     *
     * @var [String
     */
    public $url;

    /**
     * The middleware of the route
     *
     * @var Middleware
     */
    public $middleware;

    /**
     * The name of the route
     *
     * @var string
     */
    public $name;

    /**
     * The controller of the route
     *
     * @var Controller
     */
    public $controller;

    /**
     * The callable function
     *
     * @var callable
     */
    public $function;

    public function __construct($url, $middleware, $name, $controller, $function)
    {
        $this->url = $url;
        $this->middleware = $middleware;
        $this->name = $name;
        $this->controller = $controller;
        $this->function = $function;
    }
}