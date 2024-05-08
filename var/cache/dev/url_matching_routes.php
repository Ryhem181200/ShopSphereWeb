<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/login' => [[['_route' => 'app_admin_login', '_controller' => 'App\\Controller\\AdminSecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_admin_logout', '_controller' => 'App\\Controller\\AdminSecurityController::logout'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/chat/publish' => [[['_route' => 'chat_publish', '_controller' => 'App\\Controller\\ChatController::publish'], null, null, null, false, false, null]],
        '/chat/fetch' => [[['_route' => 'chat_fetch', '_controller' => 'App\\Controller\\ChatController::fetchChatMessages'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/Profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\MainController::profile'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mainadmin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\UtilisateurController::admindhashboard'], null, null, null, false, false, null]],
        '/mainadmin/settings' => [[['_route' => 'app_admin_settings', '_controller' => 'App\\Controller\\UtilisateurController::admindsettings'], null, null, null, false, false, null]],
        '/mainadmin/changepassword' => [[['_route' => 'app_admin_password', '_controller' => 'App\\Controller\\UtilisateurController::changePassword'], null, null, null, false, false, null]],
        '/mainadmin/Profile' => [[['_route' => 'app_admin_profile', '_controller' => 'App\\Controller\\UtilisateurController::admindprofile'], null, null, null, false, false, null]],
        '/mainadmin/Users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UtilisateurController::admindusers'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/terms-of-use' => [[['_route' => 'app_terms_of_use', 'template' => 'Termsofuse.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/privacy-policy' => [[['_route' => 'app_privacy_policy', 'template' => 'Privacypolicy.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/mainadmin/users/(?'
                    .'|delete/([^/]++)(*:42)'
                    .'|edit/([^/]++)(*:62)'
                .')'
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
        42 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\UtilisateurController::deleteUser'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\UtilisateurController::editUser'], ['id'], null, null, false, true, null]],
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
