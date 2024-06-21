<?php
require 'connect.php';
session_start();

$errors = [];

// Check if reset_email session variable is set
if (!isset($_SESSION["reset_email"])) {
    header("Location: email.php"); // Redirect to email.php if session variable is not set
    exit();
}

// Handle form submission
if (isset($_POST["submit"])) {
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate passwords
    if ($new_password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    } else {
        // Retrieve email from session
        $reset_email = $_SESSION["reset_email"];

        // Fetch user data based on email
        $stmt = mysqli_prepare($conn, "SELECT * FROM custInfo WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $reset_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Check if new password is different from old password
            if ($new_password === $row["password"]) {
                $errors[] = "New password cannot be the same as the old password.";
            } else {
                // Update password in the database
                $stmt = mysqli_prepare($conn, "UPDATE custInfo SET password=? WHERE email=?");
                mysqli_stmt_bind_param($stmt, "ss", $new_password, $reset_email);
                $update_result = mysqli_stmt_execute($stmt);

                if ($update_result) {
                    // Unset reset_email session variable
                    unset($_SESSION["reset_email"]);
                    // Redirect to login page or another appropriate page
                    header("Location: index.php");
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <form action="reset_pword.php" method="post">
            <h2>Reset Password</h2>

            <?php if (!empty($errors)) : ?>
                <div class="errors">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="input-field">
                <input type="password" name="new_password" required>
                <label>New Password</label>
            </div>

            <div class="input-field">
                <input type="password" name="confirm_password" required>
                <label>Confirm New Password</label>
            </div>

            <button type="submit" name="submit">Reset Password</button>

            <div class="register">
                <p>Remember your password? <a href="index.php">Log in here</a></p>
            </div>
        </form>
    </div>
</body>
</html>
