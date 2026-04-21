<?php


//require_once 'app/A.php';
//require_once 'classes/A.php';

use classes\A;
use classes\test\B;

spl_autoload_register(function ($class){

    var_dump($class);
    $filename = "{$class}.php";

    require_once $filename;


});



new \app\A();
new A();
new B();