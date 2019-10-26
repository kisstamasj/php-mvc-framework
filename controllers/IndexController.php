<?php

namespace controllers;

use \interfaces\ControllerInterface;

class IndexController extends Controller implements ControllerInterface
{
    /**
     * This function render the start page
     *
     * @return void
     */
    public function render()
    {
        $this->view->toView(['subTitle' => "Login"])->loadView("index_view");
    }
}