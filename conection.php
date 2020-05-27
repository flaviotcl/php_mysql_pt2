<?php

$debug = TRUE;

/***
 *   MYSQL_REPORT_ERROR
 *   MYSQL_REPORT_OFF
 *   MYSQL_REPORT_STRICT   --> Retorna em formato de Exception.
 *   MYSQL_REPORT_INDEX    --> Verifica se existe algum índice quebrado. 
 *   MYSQL_REPORT_ALL  
 ***/

if($debug)
{
    mysqli_report(MYSQLI_REPORT_ERROR);    
}    
else
{
    mysqli_report(MYSQLI_REPORT_OFF);
}
$conn = new mysqli('localhost','root','123456','php_mysql_avancando');

if($conn->connect_errno)
{
    die('Error: '.$conn->connect_error);
}

return $conn;