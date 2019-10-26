<?php

namespace middlewares;

use interfaces\MiddlewareInterface;

class Web extends Middleware implements MiddlewareInterface
{
    /**
     * Handle the request
     *
     * @return void
     */
    public function handle()
    {
        return true;
    }
}