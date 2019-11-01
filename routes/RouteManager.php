<?php

namespace routes;

use libraries\Application;

class RouteManager
{
    /**
     * Contain all route
     *
     * @var Route[] An array of route
     */
    private $routes = [];

    /**
     * The application object
     *
     * @var Application
     */
    private $application;

    public function __construct()
    {
        $this->application = Application::getInstance();
    }

    /**
     * Create route
     *
     * @param array $params [url, middleware, name, controller, function]
     * @return void
     */
    public function createRoute($params)
    {
        $existsRoute = array_filter($this->routes, function($route)use($params){
            if( $route->name === $params['name']) return true;
        });
        if($existsRoute) throw new \Exception("The route name needs to be unique: ".print_r($existsRoute,true));

        $this->routes[]= new Route($params['url'], $params['middleware'], $params['name'], $params['controller'], $params['function']);

        return $this;
    }

    /**
     * This function get the route
     *
     * @param string $url
     * @return void|Route
     */
    public function getRoute()
    {
        foreach ($this->routes as $route) {
            if($route->url == $this->application->url) return $route;
        }

        $this->application->loadError('no_route');
    }
}