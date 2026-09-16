<?php

$title = 'My BLog: Homepage';

$db = db();

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->findAll();

$recent_posts = db()->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->findAll();

require_once VIEWS . '/posts/index.tpl.php';