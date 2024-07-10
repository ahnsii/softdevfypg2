<?php
include 'connect.php';

session_start(); // Start the session to access session variables
// Fetch user data from the database
$user_email = $_SESSION['user_email']; // Assuming user_email is stored in the session
$sql = "SELECT name, email, phone_number FROM custinfo WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$name = $user['name'];
$email = $user['email'];
$phone_number = $user['phone_number'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);

    // Validate the input (add your own validation rules)
    if (!empty($name) && !empty($email) && !empty($phone_number)) {
        // Update the user's profile in the database
        $sql = "UPDATE custinfo SET name=?, email=?, phone_number=? WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $phone_number, $user_email);

        if ($stmt->execute()) {
            echo "Profile updated successfully.";
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }
}
?>

<!--Cust Profile page-->

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suki-Ya @ Setapak Central Booking System &mdash; Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0;
            color: #2e323c;
            background: #f5f6fa;
            font-family: 'Nunito', sans-serif;
        }
        .container {
            padding-bottom: 50px;
        }
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }
        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }
        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            border-radius: 100px;
        }
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }
        .account-settings .about {
            margin: 1rem 0 0 0;
            text-align: center;
        }
        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #dc3545;
            font-size: 17px;
        }
        .account-settings .about a h5:hover {
            color: midnightblue;
            text-decoration: underline;
            font-weight: bold;
            transition: 0.5s;
        }
        .form-control {
            border: 1px solid #cfd1d8;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }
        .form-group i {
            padding-right: 20px;
            font-size: 20px;
            padding-left: 20px;
            color: #8F0040;
        }
        .form-group label {
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .form-group p {
            color: grey;
            padding-left: 64px;
        }
        .card {
            background: #ffffff;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
        .row .gutters .userheader h6 {
            padding-bottom: 20px;
            font-size: 30px;
            font-weight: 800;
            color: #8F0040 !important;
            font-weight: bolder !important;
        }
        .btn {
            position: relative;
            bottom: -2px;
            color: black;
        }
        .genderradio {
            display: flex;
        }
        input[type="radio"] {
            display: none;
        }
        label {
            display: block;
            cursor: pointer;
            font-weight: 400;
            margin-bottom: 10px;
        }
        label span {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px 10px 10px;
            border-radius: 59px;
            transition: .25s ease;
        }
        label span:hover {
            background-color: #d6d6e5;
        }
        label span:before {
            content: "";
            background-color: white;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 10px;
            transition: .25s ease;
            box-shadow: inset 0 0 0 2px #00005c;
        }
        input[type="radio"]:checked + span:before {
            box-shadow: inset 0 0 0 10px #00005c;
        }
        @media only screen and (min-width: 600px) {
            .col-s-1 {width: 8.33%;}
            .col-s-2 {width: 16.66%;}
            .col-s-3 {width: 25%;}
            .col-s-4 {width: 33.33%;}
            .col-s-5 {width: 41.66%;}
            .col-s-6 {width: 50%;}
            .col-s-7 {width: 58.33%;}
            .col-s-8 {width: 66.66%;}
            .col-s-9 {width: 75%;}
            .col-s-10 {width: 83.33%;}
            .col-s-11 {width: 91.66%;}
            .col-s-12 {width: 100%;}
        }
        @media only screen and (min-width: 768px) {
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}
        }
    </style>
</head>
<body>
    <div class="js-sticky">
        <div class="fh5co-main-nav">
            <div class="container-fluid">
                <nav class="fh5co-menu-2">
                    <div class="header-logo">
                        <img src="images/Pics%202.png" width="125px">
                        <a href="#" data-nav-section="#">My Account</a>
                        <span>|</span>
                        <a href="#" data-nav-section="profile">My Profile</a>
                        <a href="#" data-nav-section="bookings">My Bookings</a>
                        <a href="#" data-nav-section="orders">My Orders</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User Avatar">
                                </div>
                                <h5 class="user-name"><?php echo htmlspecialchars($name); ?></h5>
                            </div>
                            <div class="about">
                                <a href="cust_profile.php"><h5>View Profile</h5></a>
                                <hr>
                                <a href="custeditprofile.php"><h5>Edit Profile</h5></a>
                                <hr>
                                <a href="change_pword.php"><h5>Change Password</h5></a>
                                <hr>
                                <a href="logout.php"><h5>Sign Out</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="userheader">
                                    <h6 class="mb-2 text-primary" style="text-align: center;">USER PROFILE<hr></h6>
                                </div>
                            </div>
                            <form method="POST" action="custeditprofile.php">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <i class="fa fa-user"></i><label for="fullName">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <i class="fa fa-envelope"></i><label for="eMail">Email Address</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <i class="fa fa-phone"></i><label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" value="<?php echo htmlspecialchars($phone_number); ?>">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input class="btn btn-primary" value="Save Changes" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div id="fh5co-footer">
            <div class="container">
                <div class="row row-padded">
                    <div class="col-md-12 text-center">
                        <br><br><br><br><br><br>
                        <p class="to-animate">&copy; 2024 Suki-Ya Booking System. <br> Designed by DCS 6 - 22/24 <br> SBS, Group 02. </p>
                        <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="fh5co-social">
                            <li class="to-animate-2"><a href="https://www.facebook.com/sukiyakl/" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li class="to-animate-2"><a href="https://www.tiktok.com/@sukiyamalaysia" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li class="to-animate-2"><a href="https://www.instagram.com/suki.ya_malaysia/" target="_blank"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap DateTimePicker -->
    <script src="js/moment.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <script>
        $(function () {
            $('#date').datetimepicker();
        });
    </script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>