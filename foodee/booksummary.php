<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suki-Ya @ Setapak Central Booking System &mdash; Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive">
    <meta name="author" content="FREEHTML5.CO">

    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Include Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>

<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <nav class="fh5co-menu-2">
                <div class="header-logo">
                    <img src="images/Pics%202.png" width="125px">
                    <a href="#" data-nav-section="#">Book Slot</a>
                    <span>|</span>
                    <a href="#" data-nav-section="profile">Book Slot</a>
                </div>
            </nav>
        </div>
    </div>
</div>

<div id="fh5co-contact" data-section="feedbackform">
    <div class="container">
        <div class="row text-center fh5co-heading row-padded">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="heading to-animate">Your Booking Summary</h2>
                <p class="sub-heading to-animate">Review your booking summary here</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <?php
                if (isset($_SESSION['Name'])) {
                    echo "<p><strong>No. of Pax:</strong> " . htmlspecialchars($_SESSION['Pax']) . "</p>";
                    echo "<p><strong>Date:</strong> " . htmlspecialchars($_SESSION['Date']) . "</p>";
                    echo "<p><strong>Time:</strong> " . htmlspecialchars($_SESSION['Time']) . "</p>";
                    echo "<p><strong>Name:</strong> " . htmlspecialchars($_SESSION['Name']) . "</p>";
                    echo "<p><strong>Phone No.:</strong> " . htmlspecialchars($_SESSION['Phone']) . "</p>";
                    echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION['Email']) . "</p>";
                    echo "<p><strong>Special Request:</strong> " . htmlspecialchars($_SESSION['Message']) . "</p>";
                } else {
                    echo "<p>No booking information available.</p>";
                }
                ?>
            </div>
        </div>

    </div>
</div>

<footer>
    <div id="fh5co-footer">
        <div class="container">
            <div class="row row-padded">
                <div class="col-md-12 text-center">
                    <p class="to-animate">&copy; 2016 Foodee Free HTML5 Template. <br> Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a> <br> Tasty Icons Free <a href="http://handdrawngoods.com/store/tasty-icons-free-food-icons/" target="_blank">handdrawngoods</a>
                    </p>
                    <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="fh5co-social">
                        <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                        <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Include JS scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
