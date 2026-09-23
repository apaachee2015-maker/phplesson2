<?php

use myframe\Validator;

$db = \myframe\App::get(\myframe\Db::class);

$fillable = ['name', 'email', 'password'];
$data = loaddata($fillable);

$validator = new \myframe\Validator();

$rules = [
    'name' =>
        ['required' => true,
        'max' => 100,
        ],
    'email' =>
        ['email' => true,
         'max' => 100,
            'unique' => 'users:email'
        ],

    'password' =>
        ['required' => true,
            'min' => 6,
        ],

];

$validator = new Validator();
$validation = $validator->validate($data, $rules);

if (!$validation->hasErrors())
{

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    if ($db->query("INSERT INTO users (`name`, `email`, `password`) VALUES (:name, :email, :password)", $data))
    {
        $_SESSION['success'] = 'Registration is OK !';
    }else
    {
        $_SESSION['error'] = 'Registration Error !';
    }
    redirect('/');
}else
{
    require VIEWS . '/users/register.tpl.php';
}