<?php

    require dirname(__DIR__) . '/config/config.php';

    require CORE . '/classes/Db.php';
    require CORE . '/funcs.php';

    $db_config = require CONFIG . '/db.php';
    $db = (Db::getInstance())->getConnection($db_config);
    $db2 = (Db::getInstance())->getConnection($db_config);


    require CORE . '/router.php';








