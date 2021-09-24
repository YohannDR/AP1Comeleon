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
        '/prestation/1' => [[['_route' => 'prestation_show', '_controller' => 'App\\Controller\\PrestationController::show'], null, null, null, false, false, null]],
        '/prestation/add' => [[['_route' => 'prestation_add', '_controller' => 'App\\Controller\\PrestationController::add'], null, null, null, false, false, null]],
        '/prestation/supp' => [[['_route' => 'prestation_supp', '_controller' => 'App\\Controller\\PrestationController::supp'], null, null, null, false, false, null]],
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
