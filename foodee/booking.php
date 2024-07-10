<!--Cust Profile page-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suki-Ya @ Setapak Central Booking System &mdash; Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	
	
<!--	<link rel="stylesheet" href="testprof.css">-->
	
<!--	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">-->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<nav class="fh5co-menu-2">
                        <div class="header-logo"><img src= "images/Pics%202.png"  width="125px">
						<a href="#" data-nav-section="#">Book Slot</a>
                        <span>|</span>
                        <a href="#" data-nav-section="profile">Book Slot</a>
					</div>
					<!--<div class="fh5co-menu-2">
						<a href="#" data-nav-section="reservation">Feedback Form</a>
                        <a href="#" data-nav-section="events">Contact Us</a>
                        <a href="foodee/default.html#fh5co-contact">
					</div>-->
				</nav>
				
			</div>
		</div>
		
<!--
		<div class="container">
		    <div class="booking-form"></div>
		    <br><br><br>
		    <h2>Booking Form</h2>
		    <br>
		    <form action="">
              <label for="fname">No. of Pax:</label><br>
              <input type="text" id="fname" name="fname"><br>
              <label for="lname">Select Date &amp; Time:</label><br>
              <input type="text" id="lname" name="lname"><br>
		      <label for="fname">First name:</label><br>
              <input type="text" id="fname" name="fname"><br>
              <label for="lname">Last name:</label><br>
              <input type="text" id="lname" name="lname"><br>
              <label for="fname">Phone No.:</label><br>
              <input type="text" id="fname" name="fname"><br>
              <label for="lname">Email:</label><br>
              <input type="text" id="lname" name="lname"><br>
              <label for="fname">Special Request:</label><br>
              <input type="text" id="fname" name="fname"><br>
		    </form>
		</div>
-->
		<div id="fh5co-contact" data-section="feedbackform">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Book Slot Form</h2>
						<p class="sub-heading to-animate">Welcome to our Reservation Page! Book your table in advance and enjoy an exceptional dining experience. We look forward to serving you!</p>
					</div>
				</div>
                <form action="">
				<div class="row">
					
				<form id="feedbackForm" action="submit_booking.php" method="post">
                    <div class="form-group">
                        <label for="Pax">No. of Pax</label>
                        <input id="Pax" name="Pax" class="form-control" placeholder="No. of Pax" type="number" min="1" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="Date">Select Date</label>
                        <input id="Date" name="Date" class="form-control" placeholder="Select Date" type="date" required>
                    </div>
                    <div class="form-group">
                        <label for="Time">Select Time</label>
                        <input id="Time" name="Time" class="form-control" placeholder="Select Time" type="time" required>
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input id="Name" name="Name" class="form-control" placeholder="Name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone No.</label>
                        <input id="Phone" name="Phone" class="form-control" placeholder="+60-XXX XXXX" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input id="Email" name="Email" class="form-control" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Special Request</label>
                        <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Write your request here (if any)" required></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" value="Book Slot" type="submit">
                    </div>
                </form>

				</div>
				</form>
			</div>
		</div>

		
<!--
		<div id="fh5co-contact">
			<div class="container">
				
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">My Account</h2>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 to-animate-2">
					<div data-section="profile">
						<h3>My Profile</h3>
						<div class="form-group ">
							<label for="name" class="sr-only">Name</label>
							<input id="name" class="form-control" placeholder="Name" type="text">
						</div>
						<div class="form-group ">
							<label for="email" class="sr-only">Email</label>
							<input id="email" class="form-control" placeholder="Email" type="email">
						</div>
						
						<div class="form-group ">
							<label for="message" class="sr-only">PhoneNo</label>
							<input id="phoneno" class="form-control" placeholder="Phone Number" type="text">
						</div>
						<div class="form-group ">
							<label for="message" class="sr-only">Pass</label>
							<input id="pass" class="form-control" placeholder="Password" type="text">
						</div>
						
						<div class="form-group ">
							<input class="btn btn-primary" value="Edit Profile" type="submit">
						</div>
                    </div>
                        <br><br>
                
                       <div data-section="bookings">
                        <h3>My Bookings</h3>
						<div class="form-group ">
							<label for="name" class="sr-only">Name</label>
							<input id="name" class="form-control" placeholder="Name" type="text">
						</div>
						
                       
                       <br><br>
                       
				    </div>
			    </div>
		    </div>
        </div>
	</div>
-->

    <footer>
	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
				    <br><br><br>
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

</div>

	</body>
</html>
