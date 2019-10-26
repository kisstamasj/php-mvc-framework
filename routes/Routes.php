<?php

namespace routes;

/**
 * Routes creater
 */
trait Routes
{
    /**
     * This function load the routes
     *
     * @return void
     */
    public function loadRoutes()
    {
        try {
             /**
             * @var RouteManager
             */
            $this->routeManager->createRoute([
                'url'           => '/',
                'middleware'    => 'Web',
                'name'          => 'index',
                'controller'    => 'IndexController',
                'function'      => 'render'
            ])
            ->createRoute([
                'url'           => 'api/user/login',
                'middleware'    => 'Api',
                'name'          => 'login',
                'controller'    => 'UserController',
                'function'      => 'login'
            ])
            ->createRoute([
                'url'           => 'api/user/logout',
                'middleware'    => 'Api',
                'name'          => 'logout',
                'controller'    => 'UserController',
                'function'      => 'logout'
            ])
            ->createRoute([
                'url'           => 'admin/dashboard',
                'middleware'    => 'Admin',
                'name'          => 'dashboard',
                'controller'    => 'DashboardController',
                'function'      => 'render'
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
