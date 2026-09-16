<?php
$db = \myframe\App::get(\myframe\Db::class);

$id = $_GET['id'] ?? 0;
$title = trim($_POST['title'] ?? '');
$post = $db->query("SELECT * FROM posts WHERE id = ?", [$id])->find();

if (!$post)
{
    abort();
}
require_once VIEWS . '/posts/edit.tpl.php';