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
                    <a href="#">
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
                        <h2>Admin Profile</h2>
                        <a href="editprofadmin.php" class="btn">Edit Profile</a>

                    </div>
                      <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>sukiya</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>sukiyaAdmin@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Number Phone</td>
                            <td>:</td>
                            <td>01121003738</td>
                        </tr>
                        
      

                        
                                           </tbody>
                </table>

                </div>
                
    </div>
    
        </div></div>
</body>

</html>