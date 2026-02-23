<?php


    define("ROOT", dirname(__DIR__));
    define("PUBLIC", ROOT . '/public');
    define("CORE", ROOT . '/core');
    define("CONFIG", ROOT . '/config');
    define("APP", ROOT . '/app');
    define("CONTROLLERS", APP . '/controllers');
    define("VIEWS", APP . '/views');
    define("PATH", 'http://pless2.loc');



    require CORE . '/funcs.php';
    require CONFIG . '/routes.php';

    require CORE . '/router.php';






