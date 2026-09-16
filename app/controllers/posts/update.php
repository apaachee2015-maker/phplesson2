<?php

use myframe\Validator;

$db = \myframe\App::get(\myframe\Db::class);


$fillable = ['title', 'excerpt', 'content'];
$data = loadData($fillable);
$id = $_POST['id'] ?? 0;

$rules = [
    'title' => [
        'required' => true,
        'min' => 5,
        'max' => 190,
    ],
    'excerpt' => [
        'required' => true,
        'min' => 10,
        'max' => 190,
    ],
    'content' => [
        'required' => true,
        'min' => 10,
    ],
];

$validator = new Validator();
$validation =$validator->validate($data, $rules);


//dd($_POST);
// Здесь валидация данных...

// Обновляем запись в БД

if (!$validation->hasErrors())
{
    $data['id'] = $id;

    if ($db->query("UPDATE posts SET title = :title, excerpt = :excerpt, content = :content WHERE id = :id", $data))
    {
        $_SESSION['success'] = 'Post updated successfully';
    }
    else {
        $_SESSION['error'] = 'DB Error';
    }
    redirect('/');

}
    else {
        // При ошибках валидации подгружаем форму редактирования с выведенными ошибками
        // Формируем $post из отправленных данных формы,
        // чтобы edit.tpl.php не ругался на Undefined variable $post
        $post = $data;
        $post['id'] = $id;
        require VIEWS . '/posts/edit.tpl.php';
    }

