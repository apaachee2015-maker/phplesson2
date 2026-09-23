<?php

/**
* @var $router;
 * */

const MIDDLEWARE = [
  'auth' => \myframe\middleware\Auth::class,
      'guest' => \myframe\middleware\Guest::class
];

//Post
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php')->only('auth');
$router->post('posts', 'posts/store.php');
$router->delete('posts', 'posts/destroy.php');

// Post Editing
$router->get('posts/edit', 'posts/edit.php');
$router->patch('posts', 'posts/update.php');

$router->get('about', 'about.php');

//User

$router->get('register', 'users/register.php')->only('guest');
$router->post('register', 'users/store.php')->only('guest');
$router->get('login', 'users/login.php')->only('guest');
$router->get('logout', 'users/logout.php');

//dump($router->routes);

//$routes = [
//    '' => 'index.php',
//    'about' => 'about.php',
//    'post' => 'post.php',
//    'posts/create' => 'post-create.php',
//
//];
