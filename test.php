<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "sukiya";
$port = "4306";

// Establish connection
$conn = mysqli_connect($host, $user, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}
echo "Connection successful.<br>";

// Check if table exists
$result = mysqli_query($conn, "SHOW TABLES LIKE 'customer_informamtion'");
if (mysqli_num_rows($result) > 0) {
    echo "Table 'customer_informamtion' exists.<br>";
} else {
    echo "Table 'customer_informamtion' does not exist.<br>";
}

mysqli_close($conn);
?>
