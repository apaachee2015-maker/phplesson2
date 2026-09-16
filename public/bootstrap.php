<?php


    $container = new \myframe\ServiceContainer();

    $container->setService(\myframe\Db::class, function ()
    {
        $db_config = require CONFIG . '/db.php';
        return (\myframe\Db::getInstance())->getConnection($db_config);
    }
    );

    \myframe\App::setContainer($container);

