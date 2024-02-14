<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/allocation' => [[['_route' => 'app_allocation', '_controller' => 'App\\Controller\\AllocationController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AllocationController::indexadmin'], null, null, null, false, false, null]],
        '/showdballocation' => [[['_route' => 'showdballocation', '_controller' => 'App\\Controller\\AllocationController::showdballocation'], null, null, null, false, false, null]],
        '/addformallocation' => [[['_route' => 'addformallocation', '_controller' => 'App\\Controller\\AllocationController::addformallocation'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/editallocation/([^/]++)(*:31)'
                .'|/deletallocation/([^/]++)(*:63)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:101)'
                    .'|wdt/([^/]++)(*:121)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:167)'
                            .'|router(*:181)'
                            .'|exception(?'
                                .'|(*:201)'
                                .'|\\.css(*:214)'
                            .')'
                        .')'
                        .'|(*:224)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'editallocation', '_controller' => 'App\\Controller\\AllocationController::editallocation'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'deleteallocation', '_controller' => 'App\\Controller\\AllocationController::deleteauthor'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        121 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        167 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        201 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        214 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        224 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
