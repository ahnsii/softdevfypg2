<?php
session_start();
require 'connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $result = mysqli_query($conn, "SELECT * FROM custInfo WHERE email = '$email'");
    
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION["reset_email"] = $email; // Set the session variable
        header("Location: reset_pword.php"); // Redirect to reset_pword.php
        exit();
    } else {
        echo "<script>alert('Email not found. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="wrapper">
    <form method="post">
      <h2>Forgot Password</h2>
      <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <button type="submit" name="submit">Reset Password</button>
      <div class="register">
         <a href="index.php">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>
