<?php

    require dirname(__DIR__) . '/config/config.php';

    require CORE . '/classes/Db.php';
    require CORE . '/funcs.php';

    $db_config = require CONFIG . '/db.php';
    $db = new Db($db_config);


    require CORE . '/router.php';








