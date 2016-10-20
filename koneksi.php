<?php
$user = 'root';
$password = '';
$database = 'belajar';
$hostname = 'localhost';

$connection = mysql_connect($hostname, $user, $password);

$find = mysql_select_db($database);

?>