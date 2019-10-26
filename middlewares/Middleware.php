<?php

namespace middlewares;

use libraries\Application;

class Middleware
{
    /**
     * The application object
     *
     * @var Application
     */
    protected $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }
}