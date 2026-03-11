<?php



/**
* @var Db $db
*/

$fillable = ['title','excerpt', 'content'];
$data = loaddata($fillable);

// validation

$errors = [];

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