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

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

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
                <h2 class="heading to-animate">Book Slot Form</h2>
                <p class="sub-heading to-animate">Welcome to our Reservation Page! Book your table in advance and enjoy an exceptional dining experience. We look forward to serving you!</p>
            </div>
        </div>

        <form id="bookingForm" action="submit_booking.php" method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Pax">No. of Pax</label>
                    <input id="Pax" name="Pax" class="form-control" placeholder="No. of Pax" type="number" min="1" max="10" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Date">Select Date</label>
                    <input id="Date" name="Date" class="form-control" placeholder="Select Date" type="date" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Time">Select Time</label>
                    <input id="Time" name="Time" class="form-control" placeholder="Select Time" type="time" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input id="Name" name="Name" class="form-control" placeholder="Name" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Phone">Phone No.</label>
                    <input id="Phone" name="Phone" class="form-control" placeholder="+60-XXX XXXX" type="text" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Email">Email</label>
                    <input id="Email" name="Email" class="form-control" placeholder="Email" type="email" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="Message">Special Request</label>
                    <textarea id="Message" name="Message" cols="30" rows="5" class="form-control" placeholder="Write your request here (if any)"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <input class="btn btn-primary" value="Book Slot" type="submit">
                </div>
            </div>
        </form>

    </div>
</div>

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
                        <li class="to-animate-2"><a href="https://www.facebook.com/sukiyakl/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="to-animate-2"><a href="https://www.tiktok.com/@sukiyamalaysia" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        <li class="to-animate-2"><a href="https://www.instagram.com/suki.ya_malaysia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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