<?php


$db = \myframe\App::get(\myframe\Db::class);

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE id = ?  LIMIT 1", [$id])->findOrFail();
//if (!$post) {
//    abort();
//}


$title = "My BLog:: {$post['title']}";
require_once VIEWS . '/posts/show.tpl.php';