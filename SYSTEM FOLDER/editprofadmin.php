<?php
require 'connect.php';
session_start();

// Fetch current admin info from the database
$query = "SELECT * FROM custinfo WHERE is_admin = 1";
$result = mysqli_query($conn, $query);
$admin = mysqli_fetch_assoc($result);

// Handle form submission to update admin info
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);

    if ($password == $confirmpass) {
        $update_query = "UPDATE custinfo SET name = '$name', email = '$email', phone_number = '$phone_number', password = '$password' WHERE is_admin = 1";
        if (mysqli_query($conn, $update_query)) {
            echo "<script>alert('Profile updated successfully');</script>";
        } else {
            echo "Error updating profile: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Passwords does not match!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Admin panel</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fab fa-alipay"></i>
                        <div class="title">Suki-Ya</div>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Profile</div>
                    </a>
                </li>
                <li>
                    <a href="listcustadmin.php">
                        <i class="fas fa-clipboard-list"></i>
                        <div class="title">List of Customer</div>
                    </a>
                </li>
                <li>
                    <a href="adminbooking.php">
                        <i class="fas fa-table"></i>
                        <div class="title">Bookings</div>
                    </a>
                </li>
                <li>
                    <a href="adminmenu.php">
                        <i class="fas fa-book-open"></i>
                        <div class="title">Menu</div>
                    </a>
                </li>
                <li>
                    <a href="adminfeedbck.php">
                        <i class="fab fa-wpforms"></i>
                        <div class="title">Feedback Form</div>
                    </a>
                </li>
                <li>
                    <a href="aboutadmin.php">
                        <i class="fas fa-hands"></i>
                        <div class="title">About Us</div>
                    </a>
                </li>
                <li>
                    <a href="contactadmin.php">
                        <i class="fas fa-address-book"></i>
                        <div class="title">Contact Us</div>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <div class="title">Sign Out</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">さようなら</div>
                        <div class="card-name"></div>
                    </div>
                    
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Admin Profile</h2>
                    </div>
                    <form action="editprofadmin.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="name" value="<?php echo htmlspecialchars($admin['name']); ?>" required>
                            <label for="name">Enter your name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" value="<?php echo htmlspecialchars($admin['email']); ?>" required>
                            <label for="email">Enter your email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="phone_number" value="<?php echo htmlspecialchars($admin['phone_number']); ?>" required>
                            <label for="phone_number">Enter your phone number</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" required>
                            <label for="password">Enter your new password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="confirmpass" required>
                            <label for="confirmpass">Confirm your new password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="Update Profile">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
