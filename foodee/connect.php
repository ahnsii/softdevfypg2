<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



$host = "localhost";
$user = "root";
$password = "";
$db_name = "sukiya";
$port = "3306";

// Establish connection
$conn = mysqli_connect($host, $user, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>

