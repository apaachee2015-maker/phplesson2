<?php


function print_arr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


$data = range(1 , 101);
$per_page = 10;
$total = count($data);

$pages_count = ceil($total / $per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1)
{
    $page = 1;
}

if ($page > $pages_count)
{
    $page = $pages_count;
}
$start = ($page - 1) * $per_page;
//var_dump($per_page, $pages_count, $total, $page, $start);
print_arr(array_slice($data, $start, $per_page));

for ($i = 1; $i <= $pages_count; $i++)
{
    echo "<a href='?page={$i}'>{$i}</a> ";
}
