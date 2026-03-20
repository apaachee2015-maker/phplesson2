<?php


require_once CORE . '/classes/Validator.php';


/**
* @var Db $db
*/

$fillable = ['title','excerpt', 'content'];
$data = loaddata($fillable);

// validation
$rules = [
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
];
$validator = new Validator();
$validation = $validator->validate($data, $rules);



if ($validation->hasErrors())
{
    p_arr($validation->getErrors());
} else
{
    echo 'SUCCESS !';
}

//die;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

        if (empty($data['title'])) {
            $errors['title'] = 'The Title is required';
        }
        if (empty($data['excerpt'])) {
            $errors['excerpt'] = 'The Excerpt is required';
        }
        if (empty($data['content'])) {
            $errors['content'] = 'The Content is required';
        }

            if (empty($errors)){
                if ($db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data))
                {
                    echo 'It is OK!';
                }else
                {
                    echo "Database Error";
                }

//                redirect('/posts/create');
            }



}

$title = "My BLog:: New Post";
require_once VIEWS . '/post-create.tpl.php';