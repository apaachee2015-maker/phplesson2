<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');


if ($uri === '')
{
    require CONTROLLERS . '/index.php';
}
elseif ($uri == 'about')
{
    require CONTROLLERS . '/about.php';
}
elseif ($uri == 'post')
{
    dd("SHOW POST");
}
else
{
    abort();
}
