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
        '/demo' => [[['_route' => 'demo_index', '_controller' => 'App\\Controller\\TweetController::demo'], null, null, null, false, false, null]],
        '/demoTweet' => [[['_route' => 'demo_tweet', '_controller' => 'App\\Controller\\TweetController::demoTweet'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'tweets', '_controller' => 'App\\Controller\\TweetController::tweets'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api_index', '_controller' => 'App\\Controller\\ApiController::index'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/api/nuevoUsers' => [[['_route' => 'api_post_user', '_controller' => 'App\\Controller\\ApiController::postTweetfonyUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/nuevoTweets' => [[['_route' => 'api_post_tweet', '_controller' => 'App\\Controller\\ApiController::postTweet'], null, ['POST' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'api_get_users', '_controller' => 'App\\Controller\\ApiController::getUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/tweets' => [[['_route' => 'api_get_tweets', '_controller' => 'App\\Controller\\ApiController::getTweets'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/tweet/([^/]++)(*:184)'
                .'|/api/(?'
                    .'|tweet(?'
                        .'|s/([^/]++)(*:218)'
                        .'|/([^/]++)(?'
                            .'|(*:238)'
                        .')'
                    .')'
                    .'|user(?'
                        .'|s/([^/]++)(?'
                            .'|(*:268)'
                        .')'
                        .'|/([^/]++)(*:286)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => 'verTweet', '_controller' => 'App\\Controller\\TweetController::verTweet'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'api_get_tweet', '_controller' => 'App\\Controller\\ApiController::getTweet'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [
            [['_route' => 'api_put_tweet', '_controller' => 'App\\Controller\\ApiController::putTweet'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_delete_tweet', '_controller' => 'App\\Controller\\ApiController::deleteTweet'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        268 => [
            [['_route' => 'api_get_user', '_controller' => 'App\\Controller\\ApiController::getTweetfonyUser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_put_user', '_controller' => 'App\\Controller\\ApiController::putUser'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        286 => [
            [['_route' => 'api_delete_user', '_controller' => 'App\\Controller\\ApiController::deteleUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
