<?php


//require CORE . '/funcs.php';

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

$recent_posts = $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 4")->findAll();

require_once VIEWS . '/about.tpl.php';