<?php

namespace controllers;

class DashboardController extends Controller implements \interfaces\ControllerInterface
{
    /**
     * This function render the start page
     *
     * @return void
     */
    public function render()
    {
        $this->view->toView(['subTitle' => 'Dashboard'])->loadView("dashboard_view");
    }
}