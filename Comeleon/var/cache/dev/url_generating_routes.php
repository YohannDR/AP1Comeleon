<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'avis/ajouter' => [[], ['_controller' => 'App\\Controller\\AvisController::avisAjout'], [], [['text', '/avis/ajouter']], [], []],
    'avis' => [[], ['_controller' => 'App\\Controller\\AvisController::avis'], [], [['text', '/avis']], [], []],
    'prestation' => [[], ['_controller' => 'App\\Controller\\PrestationController::index'], [], [['text', '/prestation']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
