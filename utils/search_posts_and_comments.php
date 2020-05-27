<?php

$conn = require __DIR__.'/../conection.php';
$one_to_one = 'SELECT p.id, p.title, p.body, ANY_VALUE(c.email), ANY_VALUE(c.comment) FROM posts p LEFT JOIN comments c ON p.id = c.post_id WHERE p.id=1 GROUP BY p.id';
$one_to_many = 'SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE posts.id=1';
$belong_to = 'SELECT * FROM posts RIGHT JOIN comments ON posts.id = comments.post_id WHERE comments.id=1';


$result = $conn->query($belong_to2);

$posts = $result->fetch_all(MYSQLI_ASSOC);


var_dump($posts);
exit;