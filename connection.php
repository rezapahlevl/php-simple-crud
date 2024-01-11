<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_crud';

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
