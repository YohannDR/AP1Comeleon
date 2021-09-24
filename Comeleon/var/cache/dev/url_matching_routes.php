<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/prestation/(?'
                    .'|([^/]++)(*:30)'
                    .'|create(*:43)'
                    .'|supp(*:54)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:90)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'prestation_show', '_controller' => 'App\\Controller\\PrestationController::show'], ['id'], null, null, false, true, null]],
        43 => [[['_route' => 'prestation_create', '_controller' => 'App\\Controller\\PrestationController::create'], [], null, null, false, false, null]],
        54 => [[['_route' => 'prestation_supp', '_controller' => 'App\\Controller\\PrestationController::supp'], [], null, null, false, false, null]],
        90 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
