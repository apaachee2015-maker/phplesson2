<?php


require 'funcs.php';

$title = 'My BLog: About';

$post = '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil maiores reprehenderit,
            blanditiis recusandae eveniet aut nisi cum voluptate at possimus dignissimos accusantium 
            praesentium sequi impedit illo repudiandae veniam ullam? Aut?</p>
            <p>Obcaecati molestiae nam aut corporis fugiat rem, quaerat dicta? Corporis ullam ea ut aperiam, 
            libero maiores, amet aliquam veritatis nulla id laboriosam, fuga est ex quo. Excepturi 
            debitis maiores officia?</p>
            <p>Ipsam tenetur quas magnam, rem temporibus nostrum repellat dolore expedita
            aliquam a sunt quasi consectetur. Quae asperiores voluptatem sequi perferendis 
            officiis quasi sed nisi fugit! Deserunt voluptatum alias repellat aliquid!
            </p>';

$recent_posts = [
    '1' => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    '2' => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    '3' => [
        'title' => 'A Third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A Third item')),
    ],
    '4' => [
        'title' => 'A Fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A Fourth item')),
    ],
    '5' => [
        'title' => 'A Fifth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A Fifth item')),
    ],
];

require_once 'app/views/about.tpl.php';