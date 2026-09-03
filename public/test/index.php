<?php

phpinfo();

//require_once 'app/A.php';
//require_once 'classes/A.php';

use classes\test\A;
use classes\test\B;

spl_autoload_register(function ($class){

//    var_dump($class);
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class) . ".php";
//    var_dump($filename);

    require_once $filename;


});



new \app\A();
new A();
new B();