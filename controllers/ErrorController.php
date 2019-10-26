<?php

namespace controllers;

use \interfaces\ControllerInterface;

class ErrorController extends Controller implements ControllerInterface
{
    /**
     * Error code
     *
     * @var int
     */
    private $code;

    public function __construct($code, $application)
    {
        parent::__construct($application);
        $this->code = $code;
    }

    /**
     * This function render the start page
     *
     * @return void
     */
    public function render()
    {
        $this->view->toView(["subTitle" => "Error"])->loadError($this->code);
    }
}