<?php


$conn = require __DIR__.'/../conection.php';

$term = $argv[1] ?? null;
$term = '%'.$term.'%';

$stmt = $conn->prepare('SELECT * from posts WHERE title LIKE ?');

$stmt->bind_param('s',$term);
$stmt->execute();

$result = $stmt->get_result();


$posts = $result->fetch_all(MYSQLI_ASSOC);


foreach ($posts as $post)
{
    echo $post['title'].PHP_EOL;
    echo $post['body'].PHP_EOL;
    echo PHP_EOL;
}