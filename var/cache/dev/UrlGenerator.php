<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::index'], [], [['text', '/inscription']], [], []],
    'app_user_new_inscri' => [[], ['_controller' => 'App\\Controller\\InscriptionController::new'], [], [['text', '/newinscri']], [], []],
    'app_pwdrecup' => [[], ['_controller' => 'App\\Controller\\PwdrecupController::index'], [], [['text', '/pwdrecup']], [], []],
    'app_send_mail' => [[], ['_controller' => 'App\\Controller\\PwdrecupController::sendmail'], [], [['text', '/sendmail']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'app_all_json' => [[], ['_controller' => 'App\\Controller\\UserController::alltojson'], [], [['text', '/user/alljson']], [], []],
    'app_coaches' => [[], ['_controller' => 'App\\Controller\\UserController::allcoachs'], [], [['text', '/user/allcoaches']], [], []],
    'app_sportifs' => [[], ['_controller' => 'App\\Controller\\UserController::allsportifs'], [], [['text', '/user/allsportifs']], [], []],
    'app_admins' => [[], ['_controller' => 'App\\Controller\\UserController::alladmins'], [], [['text', '/user/alladmins']], [], []],
    'app_gérants' => [[], ['_controller' => 'App\\Controller\\UserController::allgerants'], [], [['text', '/user/allgerants']], [], []],
    'app_user_new_admin' => [[], ['_controller' => 'App\\Controller\\UserController::newadmin'], [], [['text', '/user/newadmin']], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'app_user_new_sporitf' => [[], ['_controller' => 'App\\Controller\\UserController::newsportif'], [], [['text', '/user/newsportif']], [], []],
    'app_user_new_gerant' => [[], ['_controller' => 'App\\Controller\\UserController::newgerant'], [], [['text', '/user/newgerant']], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_block' => [['id'], ['_controller' => 'App\\Controller\\UserController::block'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/user/logout']], [], []],
    'app_user_signal' => [['id'], ['_controller' => 'App\\Controller\\UserController::signal'], [], [['text', '/signal'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_userlogin' => [[], ['_controller' => 'App\\Controller\\UserloginController::index'], [], [['text', '/userlogin']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserloginController::login'], [], [['text', '/login']], [], []],
    'captcha_handler' => [[], ['_controller' => 'CaptchaBundle:CaptchaHandler:index'], [], [['text', '/captcha-handler']], [], []],
    'simple_captcha_handler' => [[], ['_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], [], [['text', '/simple-captcha-handler']], [], []],
];
