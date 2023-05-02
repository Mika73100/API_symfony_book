<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\adminController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/spotbooks' => [
            [['_route' => 'spotbooks_get', '_controller' => 'App\\Controller\\SpotbooksController::getSpotBooks'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'spotbooks_post', '_controller' => 'App\\Controller\\SpotbooksController::addSpotBooks'], null, ['POST' => 0], null, false, false, null],
        ],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::getUserList'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
