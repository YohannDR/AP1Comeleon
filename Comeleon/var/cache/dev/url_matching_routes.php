<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
        '/prestation/new' => [[['_route' => 'prestation_create', '_controller' => 'App\\Controller\\PrestationController::form'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/prestation/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:38)'
                        .'|(*:45)'
                    .')'
                    .'|supp(*:57)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'prestation_edit', '_controller' => 'App\\Controller\\PrestationController::form'], ['id'], null, null, false, false, null]],
        45 => [[['_route' => 'prestation_show', '_controller' => 'App\\Controller\\PrestationController::show'], ['id'], null, null, false, true, null]],
        57 => [[['_route' => 'prestation_supp', '_controller' => 'App\\Controller\\PrestationController::supp'], [], null, null, false, false, null]],
        93 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
