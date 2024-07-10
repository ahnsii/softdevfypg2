<?php
require 'connect.php'; // Make sure this file correctly connects to your database

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check in custinfo table
    $custResult = mysqli_query($conn, "SELECT * FROM custinfo WHERE email = '$email'");
    if ($custResult && mysqli_num_rows($custResult) > 0) {
        $custRow = mysqli_fetch_assoc($custResult);
        $stored_password = $custRow["password"];

        if ($password == $stored_password) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $custRow["id"];
            $_SESSION["user_email"] = $custRow["email"];
            $_SESSION["is_admin"] = $custRow["is_admin"];
            $_SESSION["name"] = $custRow["name"]; // Store the user's name in session

            if ($custRow["is_admin"]) {
                header("Location: dashboard.php");
            } else {
                header("Location: home_cust.php");
            }
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User not registered');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrapper">
    <form action="index.php" method="post">
        <h2>Login</h2>

        <div class="input-field">
            <input type="text" name="email" required>
            <label for="email">Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label for="password">Enter your password</label>
        </div>
        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember">
                <p>Remember me</p>
            </label>
            <a href="email.php">Forgot password?</a>
        </div>

        <button type="submit" name="submit">Log In</button>
        <div class="register">
            <p>Don't have an account? <a href="Register.php">Register</a></p>
            <a href = "default.php">Log in as guest</a>
        </div>
    </form>
</div>
</body>
</html>
