<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/espaces' => [[['_route' => 'admin_espace_list', '_controller' => 'App\\Controller\\Admin\\EspaceController::liste'], null, null, null, false, false, null]],
        '/admin/espace/create' => [[['_route' => 'admin_espace_create', '_controller' => 'App\\Controller\\Admin\\EspaceController::create'], null, null, null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenement_liste', '_controller' => 'App\\Controller\\Admin\\EvenementController::liste'], null, null, null, false, false, null]],
        '/admin/evenement/ajouter' => [[['_route' => 'admin_evenement_ajouter', '_controller' => 'App\\Controller\\Admin\\EvenementController::ajouter'], null, null, null, false, false, null]],
        '/admin/type/create' => [[['_route' => 'app_type_espace_create', '_controller' => 'App\\Controller\\Admin\\TypeEspaceController::create'], null, null, null, false, false, null]],
        '/admin/type/list' => [[['_route' => 'app_type_espace_list', '_controller' => 'App\\Controller\\Admin\\TypeEspaceController::list'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\dashboardController::index'], null, null, null, false, false, null]],
        '/espaces' => [[['_route' => 'app_espace_list', '_controller' => 'App\\Controller\\Front\\EspacesController::list'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\Front\\aboutController::index'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\Front\\eventsController::index'], null, null, null, false, false, null]],
        '/events/search' => [[['_route' => 'event_search', '_controller' => 'App\\Controller\\Front\\eventsController::search'], null, null, null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback', '_controller' => 'App\\Controller\\Front\\feedbackController::index'], null, null, null, false, false, null]],
        '/feedback/add' => [[['_route' => 'app_feedback_add', '_controller' => 'App\\Controller\\Front\\feedbackController::addFeedback'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\Front\\homeController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|e(?'
                        .'|space/([^/]++)(?'
                            .'|/edit(*:238)'
                            .'|(*:246)'
                        .')'
                        .'|venement/([^/]++)(?'
                            .'|/edit(*:280)'
                            .'|(*:288)'
                        .')'
                    .')'
                    .'|programme/(?'
                        .'|liste/([^/]++)(*:325)'
                        .'|new/([^/]++)(*:345)'
                        .'|([^/]++)/(?'
                            .'|edit(*:369)'
                            .'|delete(*:383)'
                        .')'
                        .'|admin/programme/([^/]++)/pdf(*:420)'
                    .')'
                    .'|type(?'
                        .'|/edit/([^/]++)(*:450)'
                        .'|\\-espace/delete/([^/]++)(*:482)'
                    .')'
                .')'
                .'|/e(?'
                    .'|space/([^/]++)(*:511)'
                    .'|vent/([^/]++)(*:532)'
                .')'
                .'|/feedback/(?'
                    .'|([^/]++)(*:562)'
                    .'|update/([^/]++)(*:585)'
                .')'
                .'|/reply/create/([^/]++)(*:616)'
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
        238 => [[['_route' => 'admin_espace_edit', '_controller' => 'App\\Controller\\Admin\\EspaceController::edit'], ['id'], null, null, false, false, null]],
        246 => [[['_route' => 'admin_espace_delete', '_controller' => 'App\\Controller\\Admin\\EspaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\Admin\\EvenementController::edit'], ['id'], null, null, false, false, null]],
        288 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\Admin\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'admin_programme_liste', '_controller' => 'App\\Controller\\Admin\\ProgrammeController::listeProgrammes'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'admin_programme_new', '_controller' => 'App\\Controller\\Admin\\ProgrammeController::new'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        369 => [[['_route' => 'admin_programme_edit', '_controller' => 'App\\Controller\\Admin\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [[['_route' => 'admin_programme_delete', '_controller' => 'App\\Controller\\Admin\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'admin_programme_pdf', '_controller' => 'App\\Controller\\Admin\\ProgrammeController::generatePdf'], ['id'], null, null, false, false, null]],
        450 => [[['_route' => 'app_type_espace_edit', '_controller' => 'App\\Controller\\Admin\\TypeEspaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        482 => [[['_route' => 'app_type_espace_delete', '_controller' => 'App\\Controller\\Admin\\TypeEspaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_espace_detail', '_controller' => 'App\\Controller\\Front\\EspacesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\Front\\eventsController::show'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'feedback_delete', '_controller' => 'App\\Controller\\Front\\feedbackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'feedback_update', '_controller' => 'App\\Controller\\Front\\feedbackController::updateFeedback'], ['id'], ['POST' => 0], null, false, true, null]],
        616 => [
            [['_route' => 'reply_create', '_controller' => 'App\\Controller\\Front\\feedbackController::createReply'], ['feedbackId'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
