<?php


use myframe\Validator;
$db = \myframe\App::get(\myframe\Db::class);
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

        if ($db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data))
        {
            $_SESSION['success'] = 'It is OK !';
        }else
        {
            $_SESSION['error'] = 'DB Error !';
        }
        redirect('/');
    }else
    {
        require VIEWS . '/posts/create.tpl.php';
    }


