<?php


$db = \myframe\App::get(\myframe\Db::class);
    $api_data = json_decode(file_get_contents('php://input'), 1) ;

    $data = $api_data ?? $_POST;
    $id = $data['id'] ?? 0;

    $db->query("DELETE FROM posts WHERE id = ?", [$id]);
    if ($db->rowCount())
    {
        $res['answer'] = $_SESSION['success'] = 'Post Deleted';
    }else
    {
        $res['answer'] = $_SESSION['error'] = 'Deleted Error';
    }


    if ($api_data)
    {
        echo json_encode($res);
        die();
    }

    redirect('/');


//dd($id);
//dump($api_data);
//dd($_POST);
