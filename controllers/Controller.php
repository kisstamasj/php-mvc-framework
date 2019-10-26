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

    public function __construct(Application $application)
    {
        $this->view = new View;
        $this->application = $application;
    }
}