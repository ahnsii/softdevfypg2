<?php
require 'connect.php';

session_start(); // Start the session

// Check if the user is logged in, if not then redirect them to the login page
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suki-Ya @ Setapak Central Booking System &mdash; Customer Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<script src="dropdown2.js"></script>
	<style>
        /* Add some basic styling for the dropdown */
        .dropdown2 {
            position: relative;
            display: inline-block;
        }

        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content2 a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content2 a:hover {
            background-color: #f1f1f1;
        }

        .show {
            display: block;
        }
    </style>

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

    <link rel="stylesheet" href="dropdown2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate">Suki-Ya</h1>
							<h2 class="to-animate">Booking System <span>@</span> Setapak Central</h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-2">
                        <div class="header-logo"><img src= "images/Pics%202.png"  width="125px" onclick="window.location.href='home_cust.php';">
						<a href="#" data-nav-section="about">About</a>
                        <a href="#" data-nav-section="menu">Menu</a>
						<a href="#" data-nav-section="bookslot">Book Slot</a>
						<a href="#" data-nav-section="pickuporder">Pickup Order</a>
						<a href="#" data-nav-section="feedbackform">Feedback Form</a>
                        <a href="#" data-nav-section="events">Contact Us</a>
                        <a href="#"><?php echo $_SESSION["name"]; ?></a>
<!--
                        <div class="user-icon-2" onclick="window.location.href='index.php';">
                            <img src="images/login.png" width="35px" style="border: none;"/>
                        </div>
-->
						<div class="dropdown2">
                            <button onclick="myFunction()" class="dropbtn2">My Account</button>
                            <div id="myDropdown" class="dropdown-content2">
                                <a href="cust_profile.php" onclick="window.location.href='cust_profile.php';">Profile</a> 
                                <a href="cust_profile.php" onclick="window.location.href='cust_profile.php';">Booking History</a>
                                <a href="logout.php" onclick="window.location.href='logout.php';">Sign Out</a>
                            </div>
                        </div>
                        <script src="dropdown2.js"></script>
					    </div>
					    
					    
					<!--<div class="fh5co-menu-2">
						<a href="#" data-nav-section="reservation">Feedback Form</a>
                        <a href="#" data-nav-section="events">Contact Us</a>
					</div>-->
				    </div>
				
			</div>
		</div>

		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">About Us</h2>
				<p class="to-animate"><span class="firstcharacter">T</span>he conceptualization of Suki-Ya was born from the combination of specialized shops in Japan serving hot pot, shabu-shabu and sukiyaki. In order to adopt and share the exclusive dining experience, we gathered technology and expertise from Japan and fuse them together. We wanted to share our idea of a modern healthy lifestyle eatery where people can get together to experience healthy, low fat food in a warm atmosphere.<br><br>
                At Suki-Ya, we offer 4 choices of popular soup bases to further entice the diner's pallete with the FREE FLOW of freshly sliced meat. Fans of sukiyaki will certainly love our paper thin sliced beef. To complement the rich selection of meat, our healthy vegetable bar is always stocked with fresh greens and premium pasteurised eggs. We have specially made dipping sauce available or you can always create your own favourite sauce. We also have an a-la carte menu with choices ranging from tofu to the ever popular salmon sashimi.</p>
				<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>
		</div>
		
        <div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Food Menu</h2>
						
					</div>
				</div>
				<div class="container">
        
<!--        <h3 class="title"> Suki-Ya Menu </h3>-->
        
        <div class="products-container">
            
            <div class="product" data-name=p-1>
                <img src="shabushabu.jpg" alt="">
                <h3>Shabu-shabu</h3>
                <div class="price">しゃぶしゃぶ</div>
            </div>
            
            <div class="product" data-name=p-2>
                <img src="suki.jpg" alt="">
                <h3>Sukiyaki</h3>
                <div class="price">すき焼き</div>
            </div>
            
            <div class="product" data-name=p-3>
                <img src="miso.jpg" alt="">
                <h3>Miso Soup</h3>
                <div class="price">味噌</div>
            </div>
            
            <div class="product" data-name=p-4>
                <img src="kimu.jpg" alt="">
                <h3>Kimuchi</h3>
                <div class="price">キムチ</div>
            </div>
            
            <div class="product" data-name=p-5>
                <img src="gfx_healthybar.jpg" alt="">
                <h3>Healthy Bar with Assorted Veges</h3>
                <div class="price">Free Flow!</div>
            </div>
            
            <div class="product" data-name=p-6>
                <img src="meat.jpeg" alt="">
                <h3>Chicken/Beef/Lamb Meat</h3>
                <div class="price">Free Flow!</div>
            </div>
           
            
        </div>
        <br><br><br>
        <div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Drinks</h2>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Orange Juice</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM4.50
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_6.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Green Tea (free flow)</h3>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM2.00
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_7.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Soft Drinks</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM4.50
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Iced Lemon Tea</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM9.90
									</div>
								</li>
                                <li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Oolong Cha</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM3.50
									</div>
								</li>
                                <li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>Pink Guava</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										RM4.50
									</div>
								</li>
							</ul>
						</div>
					</div>
					
    </div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="#" class="btn btn-primary btn-outline">More Food Menu</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-featured" data-section="bookslot">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Book Slot</h2>
						<p class="sub-heading to-animate">Click here now to book a dine-in slot at Suki-Ya @ Setapak Central!</p>
                        <a href="booking.php" class="btn btn-primary">Book Slot</a> 
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-type" data-section="pickuporder" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
<!--			<div class="fh5co-overlay"></div>-->
			<div class="container">
			    <div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Pickup Order</h2>
						<p class="sub-heading to-animate">Coming Soon!</p> 
					</div>
				</div>
			
			
<!--
				<div class="row">
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-1">Fruits</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-2">Sea food</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-3">Vegetables</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-4">Meat</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
-->
			</div>
		</div>

		<div id="fh5co-contact" data-section="feedbackform">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Feedback Form</h2>
						<p class="sub-heading to-animate">Welcome to our Feedback Form - your input helps us improve and deliver the best possible service.</p>
					</div>
				</div>
				<div class="row">
					
				<form id="feedbackForm" action="submit_feedback.php" method="post">
                    <div class="form-group">
                        <label for="Name" class="sr-only">Name</label>
                        <input id="Name" name="Name" class="form-control" placeholder="Name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="sr-only">Email</label>
                        <input id="Email" name="Email" class="form-control" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">feedback</label>
                        <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" value="Send Message" type="submit">
                    </div>
                </form>

				</div>
			</div>
		</div>


		<div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5">
<!--			<div class="fh5co-overlay"></div> ni utk overlay bg kat contacts tu-->
			<div class="container">
			
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">Contact Us</h2>
						<p class="sub-heading">Questions about our menu or services? Contact us for assistance.</p>
					</div>
				</div>
<!--				<div class="col-md-6 to-animate-2">-->
                    <div class="row text-center">
						<ul class="fh5co-contact-info">
							<div class="fh5co-contact-address">
								<i class="icon-home"></i>
								Lot No G-15 &amp; AG-15, Ground Floor, Setapak Sentral, No 67, Jalan Taman Ibu Kota, Taman Danau Kota, Setapak, <br>
                                53300 Kuala Lumpur.
							</div>
							<div><i class="icon-phone"></i>  +603-8855 8379</div>
							<div><i class="icon-envelope"></i>  info@suki-ya.com</div>
							<div><i class="icon-globe"></i> <a href="https://www.suki-ya.com/index.php" target="_blank">  Suki-Ya Official Website<br><br><br></a></div>
						</ul>
						</div>
<!--					</div>-->
				</div>
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
						<li class="to-animate-2"><a href="https://www.facebook.com/sukiyakl/" target="_blank"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="https://www.tiktok.com/@sukiyamalaysia" target="_blank"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="https://www.instagram.com/suki.ya_malaysia/" target="_blank"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	
	
	
	
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

