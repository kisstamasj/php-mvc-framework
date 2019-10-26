<?php

namespace interfaces;

interface MiddlewareInterface {

    /**
     * Handle the request
     *
     * @return void
     */
    public function handle();
}