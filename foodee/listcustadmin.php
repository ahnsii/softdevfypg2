<?php
require 'connect.php';
session_start();

// Check if delete_id is set and delete the corresponding customer
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_query = "DELETE FROM custinfo WHERE id = $delete_id";
    mysqli_query($conn, $delete_query);
    header("Location: listcustadmin.php");
    exit();
}

// Fetch customer data from the database excluding admin
$query = "SELECT id, name, phone_number, email FROM custinfo WHERE is_admin = 0";
$result = mysqli_query($conn, $query);
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
                    <a href="#">
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
                <li>
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
                        <h2>List of Customer</h2>
                    </div>
                    <table class="appointments">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                    echo "<td>
                                       
                                        <a href='listcustadmin.php?delete_id=" . $row['id'] . "'><i class='far fa-trash-alt'></i></a>
                                    </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No customers found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
