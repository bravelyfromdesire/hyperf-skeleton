<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

/**
 * index
 */
Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addGroup('/', function () {
    Router::get('request', 'App\Controller\IndexController@request');
    Router::get('auth', 'App\Controller\IndexController@auth');
    Router::get('login', 'App\Controller\IndexController@login');
});

/**
 * proxy
 */
Router::addGroup('/', function () {
    Router::get('proxy-request', 'App\Controller\ProxyController@request');
    Router::get('proxy-auth', 'App\Controller\ProxyController@auth');
    Router::get('proxy-login', 'App\Controller\ProxyController@login');
});

Router::get('/favicon.ico', function () {
    return '';
});
