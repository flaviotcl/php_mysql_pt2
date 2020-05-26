<?php

$conn = new mysqli('localhost','root','123456','php_mysql_avancando');

if($conn->connect_errno)
{
    die('Error: '.$conn->connect_error);
}

return $conn;