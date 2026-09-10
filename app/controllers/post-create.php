<?php


use myframe\Db;
use myframe\Validator;


/**
* @var Db $db
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fillable = ['title', 'excerpt', 'content'];
    $data = loaddata($fillable);

//    dump($data);
//    dd($_POST);

    // validation
    $rules = [
        'title' =>
            ['required' => true,
            'min' => 5,
            'max' => 190,

        ],
        'excerpt' =>
            ['required' => true,
            'min' => 10,
            'max' => 190,

        ],

        'content' =>
            ['required' => true,
            'min' => 10,

        ],

    ];

$validator = new Validator();
$validation = $validator->validate($data, $rules);

if (!$validation->hasErrors())
{

    if ($db->query("INSERT INTO posts (`title1`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data))
    {
      $_SESSION['success'] = 'It is OK !';
    }else
    {
      $_SESSION['error'] = 'DB Error !';
    }
  redirect();
}

}



$title = "My BLog:: New Post";
require_once VIEWS . '/post-create.tpl.php';