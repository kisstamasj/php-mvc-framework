<?php

namespace libraries;

use controllers\ErrorController;
use routes\Route;
use routes\RouteManager;
use routes\Routes;

/**
 * Application class
 */
class Application
{
    use Routes;

    private static $instance;

    /**
     * Route manager
     *
     * @var RouteManager
     */
    protected $routeManager;

    /**
     * The actual route
     *
     * @var Route
     */
    public $route;

    /**
     * The request URL
     *
     * @var string
     */
    public $url;

    private function __construct()
    {
        $this->url = isset($_GET['url']) ? $_GET['url'] : "/";
        $this->startSession();
    }

    /**
     * Get the Application instance
     *
     * @return void
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new Application();
            self::$instance->routeManager = new RouteManager();
            self::$instance->loadRoutes();
            self::$instance->route = self::$instance->routeManager->getRoute();
        }
        return self::$instance;
    }

    /**
     * This function redirect the request
     *
     * @return void
     */
    public function redirect($url){
        $url = $url == 'home' ? Config::root : Config::root.$url;
        header("Location: ".$url);
    }

    /**
     * This function start the session
     *
     * @return void
     */
    public function startSession()
    {
        session_start();
    }

    /**
     * This function load the error page
     *
     * @param int $code
     * @return void
     */
    public function loadError($code)
    {
        $class = new ErrorController($code);
        $class->render();
        die();
    }

    /**
     * This function run the application
     *
     * @return void
     */
    public function run()
    {
        try
        {
            $middleware = "middlewares\\".$this->route->middleware;
            $middleware = new $middleware();
            $middleware->handle();

            $file = "controllers\\".$this->route->controller.".php";
            $controller = "controllers\\".$this->route->controller;

            if(!file_exists($file)) $this->loadError(404);

            $controller = new $controller();
            $controller->{$this->route->function}();

        } catch (\Exception $e) {
            die($e);
        }
    }
}