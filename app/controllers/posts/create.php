<?php


$title = trim($_POST['title'] ?? '');
require_once VIEWS . '/posts/create.tpl.php';