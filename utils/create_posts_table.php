<?php


$conn = require __DIR__.'/../conection.php';

!$conn->query('DROP TABLE posts');

/***
 *  O $sql abaixo foi utilizado p/ exemplo busca por Relevância, 
 *  foi setada a ENGINE = MyISAM.
 */

/***
  $sql ='
        CREATE TABLE posts(
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50) NOT NULL,
            body TEXT NOT NULL,
            FULLTEXT key title(title,body)
        ) ENGINE = MyISAM;
    ';
***/
$sql ='
        CREATE TABLE posts(
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50) NOT NULL,
            body TEXT NOT NULL,
            FULLTEXT key title(title,body)
        )
    ';

if (!$conn->query($sql))
{
    die('Error: Table exists.');
};

$rs = $conn->query('DESCRIBE posts');

var_dump($rs->fetch_all());