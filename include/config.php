<?php 
 session_start();

$username = 'root'; // user name for database

$host = 'localhost';   // host name for database       

$password = '12345678'; // database password

$dbname = 'task'; // database name


$db = new MysqliDb ($host, $username, $password, $dbname);
?>