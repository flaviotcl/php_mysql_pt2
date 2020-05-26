<?php


$conn = require __DIR__.'/../conection.php';


$sql ='
        CREATE TABLE posts(
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50) NOT NULL,
            body TEXT NOT NULL
        )
    ';

if (!$conn->query($sql))
{
    die('Error: Table exists.');
};

$rs = $conn->query('DESCRIBE posts');

var_dump($rs->fetch_all());