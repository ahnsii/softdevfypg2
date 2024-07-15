<?php
require 'connect.php';
session_start();

$errors = [];

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate new password and confirm password match
    if ($new_password !== $confirm_password) {
        $errors[] = "New password and confirm password do not match.";
    } else {
        // Fetch user data based on email
        $stmt = mysqli_prepare($conn, "SELECT * FROM custInfo WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verify current password
            if ($current_password !== $row["password"]) {
                $errors[] = "Current password is incorrect.";
            } else if ($new_password === $row["password"]) {
                $errors[] = "New password cannot be the same as the old password.";
            } else {
                // Update password in the database
                $stmt = mysqli_prepare($conn, "UPDATE custInfo SET password=? WHERE email=?");
                mysqli_stmt_bind_param($stmt, "ss", $new_password, $email);
                $update_result = mysqli_stmt_execute($stmt);

                if ($update_result) {
                    // Show success alert and redirect to login page
                    echo "<script>
                            alert('Password successfully changed');
                            window.location.href='index.php';
                          </script>";
                    exit();
                } else {
                    $errors[] = "Error updating password. Please try again later.";
                }
            }
        } else {
            $errors[] = "User not found.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <link rel="stylesheet" href="forms_style.css">
</head>
<body>
  <div class="wrapper">
    <form action="change_pword.php" method="post">
      <h2>Change Password</h2>
      <?php
      if (!empty($errors)) {
          echo '<div class="errors">';
          foreach ($errors as $error) {
              echo '<p>' . $error . '</p>';
          }
          echo '</div>';
      }
      ?>
      <div class="input-field">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="current_password" required>
        <label>Enter current password</label>
      </div>
      <div class="input-field">
        <input type="password" name="new_password" required>
        <label>Enter new password</label>
      </div>
      <div class="input-field">
        <input type="password" name="confirm_password" required>
        <label>Confirm your new password</label>
      </div>
      <button type="submit" name="submit">Change Password</button>
      <div class="register">
        <p>Already have an account? <a href="index.php">Login here</a></p>
      </div>
    </form>
  </div>
</body>
</html>
