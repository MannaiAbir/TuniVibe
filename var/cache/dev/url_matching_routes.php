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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/atelier' => [[['_route' => 'atelier_index', '_controller' => 'App\\Controller\\Atelier::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashbord' => [[['_route' => 'app_dashbord', '_controller' => 'App\\Controller\\DashbordController::index'], null, null, null, false, false, null]],
        '/editor' => [[['_route' => 'app_editor', '_controller' => 'App\\Controller\\EditorController::index'], null, null, null, false, false, null]],
        '/gestionhebergement' => [[['_route' => 'gestionhebergement_index', '_controller' => 'App\\Controller\\GestionHebergementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hebergements' => [[['_route' => 'hebergement_index', '_controller' => 'App\\Controller\\HebergementController::index'], null, null, null, false, false, null]],
        '/hebergement/new' => [[['_route' => 'hebergement_new', '_controller' => 'App\\Controller\\HebergementController::new'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/workshop' => [[['_route' => 'workshop_index', '_controller' => 'App\\Controller\\WorkshopController::index'], null, ['GET' => 0], null, true, false, null]],
        '/workshop/new' => [[['_route' => 'workshop_new', '_controller' => 'App\\Controller\\WorkshopController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/atelier/([^/]++)(*:219)'
                .'|/categorie/(?'
                    .'|categorie/([^/]++)(*:259)'
                    .'|([^/]++)(?'
                        .'|/edit(*:283)'
                        .'|(*:291)'
                    .')'
                .')'
                .'|/gestionhebergement/([^/]++)(*:329)'
                .'|/hebergement/(?'
                    .'|(\\d+)(*:358)'
                    .'|edit/([^/]++)(*:379)'
                    .'|delete/([^/]++)(*:402)'
                .')'
                .'|/programme/(?'
                    .'|new/([^/]++)(*:437)'
                    .'|edit/([^/]++)(*:458)'
                    .'|delete/([^/]++)(*:481)'
                .')'
                .'|/seance/(?'
                    .'|new/([^/]++)(*:513)'
                    .'|([^/]++)/edit(*:534)'
                    .'|delete/([^/]++)(*:557)'
                .')'
                .'|/edit/([^/]++)(*:580)'
                .'|/user/delete/([^/]++)(*:609)'
                .'|/workshop/([^/]++)(?'
                    .'|(*:638)'
                    .'|/edit(*:651)'
                    .'|(*:659)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'atelier_show', '_controller' => 'App\\Controller\\Atelier::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'gestionhebergement_show', '_controller' => 'App\\Controller\\GestionHebergementController::show'], ['idhebergement'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'hebergement_show', '_controller' => 'App\\Controller\\HebergementController::show'], ['idhebergement'], null, null, false, true, null]],
        379 => [[['_route' => 'hebergement_edit', '_controller' => 'App\\Controller\\HebergementController::edit'], ['idhebergement'], null, null, false, true, null]],
        402 => [[['_route' => 'hebergement_delete', '_controller' => 'App\\Controller\\HebergementController::delete'], ['idhebergement'], null, null, false, true, null]],
        437 => [[['_route' => 'programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], ['hebergementId'], null, null, false, true, null]],
        458 => [[['_route' => 'programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'seance_new', '_controller' => 'App\\Controller\\SeanceController::new'], ['id'], null, null, false, true, null]],
        534 => [[['_route' => 'seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        580 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        609 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        638 => [[['_route' => 'workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [
            [['_route' => 'workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
