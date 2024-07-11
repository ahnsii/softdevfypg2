<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="author" href="default.html">-->
    
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
                    <a href="dashboard.html">
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
                    <a href="#">
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
<!--                    <section id="#fh5co-contact"></section>-->
                        <i class="fab fa-wpforms"></i>
                        <div class="title">Feedback Form</div>
                    </a>
                </li>
                <li>
                    <a href="aboutadmin.php">
<!--                    <section id="#fh5co-about"></section>-->
                        <i class="fas fa-hands"></i>
                        <div class="title">About Us</div>
                    </a>
                </li>
                <li>
                    <a href="contactadmin.php">
<!--                    <section id="#fh5co-events"></section>-->
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
                
                <div class="doctor-visiting">
                    <div class="heading">
                        <h2>Bookings</h2>
                        
                    </div>
                    <?php
                    require 'connect.php'; // Make sure this file correctly connects to your database

                    $query = "SELECT * FROM custbooking";
                    $result = mysqli_query($conn, $query);
                    ?>
                    <table class="visiting">
                        <thead>
                            <td>No. Of Pax</td>
                            <td>Date</td>
                            <td>Visit time</td>
                            <td>Name</td>
                            <td>Phone No.</td>
                            <td>Special Request</td>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['Pax'] . "</td>";
                                    echo "<td>" . $row['Date'] . "</td>";
                                    echo "<td>" . $row['Time'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['phone_num'] . "</td>";
                                    echo "<td>" . $row['req'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No bookings found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
                
            </div></div></div>
    
    
</body>

</html>