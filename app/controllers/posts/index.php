<?php

$title = 'My BLog: Homepage';

/**
*@var \myframe\Db $db;
 */

$db = db();


$page = $_GET['page'] ?? 1;
$per_page = 2;
$total = $db->query("SELECT COUNT(*) FROM posts")->getColumn();
$pagination = new  \myframe\Pagination((int)$page, $per_page, $total);

p_arr($pagination);

$start = $pagination->getStart();
var_dump($start);


die();
//  <----
$per_page = 5;

$total = $db->query("SELECT COUNT(*) FROM posts")->getColumn();
//dd($total);
$pages_count = ceil($total / $per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1)
{
    $page = 1;
}

if ($page > $pages_count)
{
    $page = $pages_count;
}
$start = ($page - 1) * $per_page;

// <---

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $start, $per_page")->findAll();

$recent_posts = db()->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->findAll();

require_once VIEWS . '/posts/index.tpl.php';