<?php
require 'connect.php';

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Function to send reset email
function sendResetEmail($email, $token) {
    $resetLink = "http://yourdomain.com/reset_password.php?token=$token";
    $subject = "Password Reset Request";
    $message = "Click the link below to reset your password: $resetLink";
    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    mail($email, $subject, $message, $headers);
}

// Handle the password reset request
if (isset($_POST['request_reset'])) {
    $email = $_POST['email'];
    $result = mysqli_query($conn, "SELECT * FROM custInfo WHERE email='$email'");

    if (mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(50)); // Generate a unique token
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token expires in 1 hour

        // Store the token and expiry in the database
        $query = "UPDATE custInfo SET reset_token='$token', reset_expiry='$expiry' WHERE email='$email'";
        mysqli_query($conn, $query);

        sendResetEmail($email, $token);
        echo "A password reset link has been sent to your email address.";
    } else {
        echo "No account found with that email address.";
    }
}

// Handle the new password submission
if (isset($_POST['reset_password'])) {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $result = mysqli_query($conn, "SELECT * FROM custInfo WHERE reset_token='$token' AND reset_expiry > NOW()");

        if (mysqli_num_rows($result) > 0) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the new password
            $query = "UPDATE custInfo SET password='$hashed_password', reset_token=NULL, reset_expiry=NULL WHERE reset_token='$token'";
            mysqli_query($conn, $query);

            echo "Your password has been successfully reset.";
        } else {
            echo "Invalid or expired token.";
        }
    } else {
        echo "Passwords do not match.";
    }
}

// Display the appropriate form based on the context
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    ?>

    <!-- Reset Password Form -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reset Password</title>
    </head>
    <body>
        <h2>Enter a New Password</h2>
        <form action="reset_password.php" method="post">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit" name="reset_password">Submit</button>
        </form>
    </body>
    </html>

    <?php
} else {
    ?>

    <!-- Request Reset Form -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Request Password Reset</title>
    </head>
    <body>
        <h2>Reset Your Password</h2>
        <form action="reset_password.php" method="post">
            <label for="email">Enter your email address:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" name="request_reset">Submit</button>
        </form>
    </body>
    </html>

    <?php
}
?>
