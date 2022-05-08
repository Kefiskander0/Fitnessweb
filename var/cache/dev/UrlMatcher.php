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
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/newinscri' => [[['_route' => 'app_user_new_inscri', '_controller' => 'App\\Controller\\InscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pwdrecup' => [[['_route' => 'app_pwdrecup', '_controller' => 'App\\Controller\\PwdrecupController::index'], null, null, null, false, false, null]],
        '/sendmail' => [[['_route' => 'app_send_mail', '_controller' => 'App\\Controller\\PwdrecupController::sendmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/alljson' => [[['_route' => 'app_all_json', '_controller' => 'App\\Controller\\UserController::alltojson'], null, ['GET' => 0], null, false, false, null]],
        '/user/allcoaches' => [[['_route' => 'app_coaches', '_controller' => 'App\\Controller\\UserController::allcoachs'], null, ['GET' => 0], null, false, false, null]],
        '/user/allsportifs' => [[['_route' => 'app_sportifs', '_controller' => 'App\\Controller\\UserController::allsportifs'], null, ['GET' => 0], null, false, false, null]],
        '/user/alladmins' => [[['_route' => 'app_admins', '_controller' => 'App\\Controller\\UserController::alladmins'], null, ['GET' => 0], null, false, false, null]],
        '/user/allgerants' => [[['_route' => 'app_gérants', '_controller' => 'App\\Controller\\UserController::allgerants'], null, ['GET' => 0], null, false, false, null]],
        '/user/newadmin' => [[['_route' => 'app_user_new_admin', '_controller' => 'App\\Controller\\UserController::newadmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/newsportif' => [[['_route' => 'app_user_new_sporitf', '_controller' => 'App\\Controller\\UserController::newsportif'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/newgerant' => [[['_route' => 'app_user_new_gerant', '_controller' => 'App\\Controller\\UserController::newgerant'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userlogin' => [[['_route' => 'app_userlogin', '_controller' => 'App\\Controller\\UserloginController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserloginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:189)'
                        .'|/(?'
                            .'|edit(*:205)'
                            .'|block(*:218)'
                        .')'
                        .'|(*:227)'
                    .')'
                    .'|logout(*:242)'
                    .'|([^/]++)/signal(*:265)'
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
        189 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'app_user_block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        227 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_user_logout', '_controller' => 'App\\Controller\\UserController::logout'], [], ['POST' => 0], null, false, false, null]],
        265 => [
            [['_route' => 'app_user_signal', '_controller' => 'App\\Controller\\UserController::signal'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
