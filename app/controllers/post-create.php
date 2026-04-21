<?php


require_once CORE . '/classes/Validator.php';


/**
* @var Db $db
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fillable = ['title', 'excerpt', 'content'];
    $data = loaddata($fillable);


    // validation
$validator = new Validator();
$validation = $validator->validate($data, [
    'title' => ['required' => true,
        'min' => 5,
        'max' => 190,

    ],
    'excerpt' => ['required' => true,
        'min' => 10,
        'max' => 190,

    ],

    'content' => ['required' => true,
        'min' => 10,

    ],
]);


if (!$validation->hasErrors())
{
    if ($db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data))
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