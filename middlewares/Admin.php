<?php

namespace middlewares;

use interfaces\MiddlewareInterface;

class Admin extends Middleware implements MiddlewareInterface
{
    /**
     * Handle the request
     *
     * @return void
     */
    public function handle()
    {
        if(!isset($_SESSION['user'])){
            $this->application->redirect('home');
        }
    }
}