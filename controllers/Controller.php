<?php

namespace controllers;

use views\View;
use libraries\Application;

class Controller
{
    /**
     * The view object
     *
     * @var View
     */
    protected $view;

    protected $application;

    public function __construct()
    {
        $this->application = Application::getInstance();
        if($this->application->route->middleware != 'Api'){
            $this->view = new View();
        }
    }
}