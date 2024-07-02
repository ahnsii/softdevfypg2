<?php
require 'connect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phoneNum"];
    $password = $_POST["password"];
    $confirmpass = $_POST["confirmpass"];

    // Check for existing email
    $duplicate = mysqli_query($conn, "SELECT * FROM admininfo WHERE email = '$email'");
    if (!$duplicate) {
        die('Error: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email has already been taken');</script>";
    } else {
        if ($password == $confirmpass) {
            // Insert new user data
            $query = "INSERT INTO admininfo (name, email, Phone_number, Password) VALUES('$name', '$email', '$phoneNum', '$password')";
            if (!mysqli_query($conn, $query)) {
                die('Error: ' . mysqli_error($conn));
            }
            echo "<script>alert('Registration successful');</script>";
        } else {
            echo "<script>alert('Password does not match!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="wrapper">
    <form action="adminreg.php" method="post">
      <h2>Register</h2>
      
      <div class="input-field">
        <input type="text" name="name" required>
        <label for="name">Enter your name</label>
      </div>
      
      <div class="input-field">
        <input type="email" name="email" required>
        <label for="email">Enter your email</label>
      </div>
      
      <div class="input-field">
        <input type="text" name="phoneNum" required>
        <label for="phoneNum">Enter your phone number</label>
      </div>
      
      <div class="input-field">
        <input type="password" name="password" required>
        <label for="password">Enter your password</label>
      </div>
      
      <div class="input-field">
        <input type="password" name="confirmpass" required>
        <label for="confirmpass">Confirm your password</label>
      </div>
      
      <button type="submit" name="submit">Register</button>
      
      <div class="register">
        <p>Already have an account? <a href="index.php">Login here</a></p>
      </div>
    </form>
  </div>
</body>
</html>
