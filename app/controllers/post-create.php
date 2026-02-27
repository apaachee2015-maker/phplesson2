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

        if (empty(trim($data['title']))) {
            $errors['title'] = 'The Title is required';
        }
        if (empty(trim($data['excerpt']))) {
            $errors['excerpt'] = 'The Excerpt is required';
        }
        if (empty(trim($data['content']))) {
            $errors['content'] = 'The Content is required';
        }

            if (empty($errors)){
                $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (?, ?, ?)",
                    [$_POST['title'], $_POST['excerpt'], $_POST['content']]);
            }



}

$title = "My BLog:: New Post";
require_once VIEWS . '/post-create.tpl.php';