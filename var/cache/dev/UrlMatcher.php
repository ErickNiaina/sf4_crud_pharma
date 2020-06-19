<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::list'], null, null, null, false, false, null]],
        '/add/category' => [[['_route' => 'category_add', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/family' => [[['_route' => 'family', '_controller' => 'App\\Controller\\FamilyController::list'], null, null, null, false, false, null]],
        '/add/family' => [[['_route' => 'family_add', '_controller' => 'App\\Controller\\FamilyController::add'], null, null, null, false, false, null]],
        '/laboratory' => [[['_route' => 'laboratory', '_controller' => 'App\\Controller\\LaboratoryController::list'], null, null, null, false, false, null]],
        '/add/laboratory' => [[['_route' => 'add_laboratory', '_controller' => 'App\\Controller\\LaboratoryController::add'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
        '/add/product' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductController::add'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/add/user' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/view/([^/]++)/(?'
                    .'|category(*:195)'
                    .'|family(*:209)'
                    .'|laboratory(*:227)'
                    .'|product(*:242)'
                    .'|user(*:254)'
                .')'
                .'|/edit/([^/]++)/(?'
                    .'|category(*:289)'
                    .'|family(*:303)'
                    .'|laboratory(*:321)'
                    .'|product(*:336)'
                    .'|user(*:348)'
                .')'
                .'|/delete/([^/]++)/(?'
                    .'|category(*:385)'
                    .'|family(*:399)'
                    .'|laboratory(*:417)'
                    .'|product(*:432)'
                    .'|user(*:444)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:488)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:519)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:555)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'category_view', '_controller' => 'App\\Controller\\CategoryController::view'], ['id'], null, null, false, false, null]],
        209 => [[['_route' => 'family_view', '_controller' => 'App\\Controller\\FamilyController::view'], ['id'], null, null, false, false, null]],
        227 => [[['_route' => 'view_laboratory', '_controller' => 'App\\Controller\\LaboratoryController::view'], ['id'], null, null, false, false, null]],
        242 => [[['_route' => 'view_product', '_controller' => 'App\\Controller\\ProductController::view'], ['id'], null, null, false, false, null]],
        254 => [[['_route' => 'user_view', '_controller' => 'App\\Controller\\UserController::view'], ['id'], null, null, false, false, null]],
        289 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], null, null, false, false, null]],
        303 => [[['_route' => 'family_edit', '_controller' => 'App\\Controller\\FamilyController::edit'], ['id'], null, null, false, false, null]],
        321 => [[['_route' => 'edit_laboratory', '_controller' => 'App\\Controller\\LaboratoryController::edit'], ['id'], null, null, false, false, null]],
        336 => [[['_route' => 'edit_product', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], null, null, false, false, null]],
        348 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null]],
        385 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, false, null]],
        399 => [[['_route' => 'family_delete', '_controller' => 'App\\Controller\\FamilyController::delete'], ['id'], null, null, false, false, null]],
        417 => [[['_route' => 'delete_laboratory', '_controller' => 'App\\Controller\\LaboratoryController::delete'], ['id'], null, null, false, false, null]],
        432 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, false, null]],
        444 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        519 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        555 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
