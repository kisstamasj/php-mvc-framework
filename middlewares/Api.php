<?php

namespace middlewares;

use interfaces\MiddlewareInterface;
use libraries\CSRFToken;

class Api extends Middleware implements MiddlewareInterface
{
    /**
     * Handle the request
     *
     * @return void
     */
    public function handle()
    {
        if((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') || !CSRFToken::validToken()){
            throw new \Exception("Invalid API call");
        }
    }
}