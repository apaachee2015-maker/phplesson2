<?php

session_start();
    require __DIR__ . '/../vendor/autoload.php';
    require dirname(__DIR__) . '/config/config.php';
    require_once __DIR__ . '/bootstrap.php';
    require CORE . '/funcs.php';

//    $s_container = \myframe\App::get(\myframe\Db::class);
//    dump(db());
//    dd($s_container);

$router = new \myframe\Router();
require CONFIG . '/routes.php';
dd($router->routes);
$router->match();




