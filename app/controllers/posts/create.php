<?php

if(!isset($_SESSION['user']))
{
    redirect('/');
}

$title = trim($_POST['title'] ?? '');
require_once VIEWS . '/posts/create.tpl.php';