<?php

/**
* @var $router;
 * */

//Post
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php');
$router->post('posts', 'posts/store.php');
$router->delete('posts', 'posts/destroy.php');

// Post Editing
$router->get('posts/edit', 'posts/edit.php');
$router->patch('posts', 'posts/update.php');

$router->get('about', 'about.php');




//$routes = [
//    '' => 'index.php',
//    'about' => 'about.php',
//    'post' => 'post.php',
//    'posts/create' => 'post-create.php',
//
//];
