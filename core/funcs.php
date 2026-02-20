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