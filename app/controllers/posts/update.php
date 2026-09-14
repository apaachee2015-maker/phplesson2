<?php


global $db;

// В твоем роутере эмуляция перехватывает _method и кладет данные в $_POST
$id = $_POST['id'] ?? 0;
$title = trim($_POST['title'] ?? '');
$excerpt = trim($_POST['excerpt'] ?? '');
$content = trim($_POST['content'] ?? '');

//dd($_POST);
// Здесь валидация данных...

// Обновляем запись в БД
$db->query("UPDATE posts SET title = ?, excerpt = ?, content = ? WHERE id = ?", [$title, $excerpt, $content, $id]);

if ($db->rowCount()) {
    $_SESSION['success'] = 'Post updated successfully';
} else {
    $_SESSION['error'] = 'Update error or no changes made';
}

redirect('/');

