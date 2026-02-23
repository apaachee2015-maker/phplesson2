<?php


function dump($data)
{
 echo
        "</pre>";
            var_dump($data);
        "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404)
    {
        http_response_code($code);
            require VIEWS . "/errors/{$code}.tpl.php";
            die;
        }
