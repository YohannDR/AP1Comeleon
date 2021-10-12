<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
<<<<<<< HEAD
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
=======
        '/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_create', '_controller' => 'App\\Controller\\ContactController::create'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
        '/prestation/new' => [[['_route' => 'prestation_create', '_controller' => 'App\\Controller\\PrestationController::form'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:33)'
                        .'|remove/([^/]++)(*:55)'
                    .')'
                    .'|restation/([^/]++)(?'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:133)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'prestation_edit', '_controller' => 'App\\Controller\\PrestationController::form'], ['id'], null, null, false, false, null]],
        96 => [[['_route' => 'prestation_show', '_controller' => 'App\\Controller\\PrestationController::show'], ['id'], null, null, false, true, null]],
        133 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
>>>>>>> origin/feature-PagePrestation
    ],
    null, // $checkCondition
];
