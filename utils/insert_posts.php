<?php


$conn = require __DIR__.'/../conection.php';

$save = true;

$conn->query('TRUNCATE posts');

$sql= file_get_contents(__DIR__.'/insert_posts.sql');

$conn->begin_transaction();

$conn->query($sql);

if($save)
{
    $conn->commit();    
}else
{
    $conn->rollback();
}

echo  "START SELECT ".PHP_EOL; 

$rs = $conn->query('SELECT * FROM posts');

$posts = $rs->fetch_all(MYSQLI_ASSOC);


foreach ($posts as $post)
{
    // echo $post['title'].' - '.$post['body'].'<br>';
    echo $post['title'].PHP_EOL;
    echo $post['body'].PHP_EOL;
    echo PHP_EOL;
}

echo  "END SELECT ".PHP_EOL;