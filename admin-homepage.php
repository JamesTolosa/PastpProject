<!DOCTYPE html>


<html lang="en">
<head>
<title>Selena Hotel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<style>
     .textarea{
            background: #white;
            border: #blue;
         color: #black;
         height: 300px;
          width: 420px;
         font-family: monospace;
        }
    
    
      input[type=submit] {
  background-color: #black;
  color: white;
  padding: 10px 10px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  float: right;
}
    
    
    
    </style>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="admin-homepage.php" class="text-center">
						<div class="logo_subtitle">Selena</div>
						<div class="logo_title">Hotel</div>
					<div class="logo_stars">
							<ul class="d-flex flex-row align-items-start justfy-content-start">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								</div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="active"><a href="admin-homepage.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
									<li><a href="about.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
									<li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>rooms</span></div></a></li>
									<li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>news</span></div></a></li>
									<li><a href="booking.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>booking</span></div></a></li>
									<li><a href="adminlogout.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Logout</span></div></a></li>
								</ul>
							</nav>
				
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="admin-homepage.php">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="rooms.html">Rooms</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="booking.html">Booking</a></li>
				<li><a href="adminlogout.php">Logout</a></li>
			</ul>
			
		</div>
	</div>
	


	<div class="home">

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<div class="owl-item">
				
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										
										<div class="home_title">Amazing Services  & Facilities</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			
			</div>

		</div>
	</div>



	<div class="intro">
		<div class="container">
			<div class="row row-lg-eq-height">

				<div class="col-lg-5 intro_col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
						<div class="intro_content">
							<div class="section_title_container">
								
								<div class="section_title"><h2>Relax and Enjoy in our Hotel</h2></div>
							</div>
							<div class="intro_text">
								<p></p>
							</div>
							<div class="intro_link"><a href="rooms.html">View Rooms</a></div>
							
						</div>
					</div>
				</div>

				<div class="col-lg-7 intro_col">
					<div class="intro_images magic_up">
					
						<div class="intro_1 intro_img"><img src="images/roomhotel1.jpg" alt=""></div>
						
						<div class="intro_2 intro_img"><img src="images/comfy.jpg" alt=""></div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						
						<div class="section_title"><h2>Choose a Room</h2></div>
					</div>
				</div>
			</div>
			<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/roomhotel3.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From P500 / <span>3 Hours</span></div>
							<div class="room_type">single</div>
							<div class="room_title"><a href="rooms.html">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="rooms.html" class="button_container room_button"><div class="button text-center"><span>See more...</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/roomhotel9.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From P1200 / <span>Day</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="rooms.html">Luxury Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="rooms.html" class="button_container room_button"><div class="button text-center"><span>See more...</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/roomhotel8.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From P3000 / <span>Day</span></div>
							<div class="room_type">Family</div>
							<div class="room_title"><a href="rooms.html">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="rooms.html" class="button_container room_button"><div class="button text-center"><span>See more...</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider magic_up">
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_1.jpg"><img src="images/gallery_1.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_2.jpg"><img src="images/gallery_2.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_3.jpg"><img src="images/gallery_3.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_4.jpg"><img src="images/gallery_4.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_5.jpg"><img src="images/gallery_5.jpg" alt=""></a>
				</div>
			</div>

		</div>

		<!-- Nav -->
		<div class="gallery_slider_nav_container">
			<div class="container">
				<div class="row">
					<div class="col clearfix">
						<div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
							<div class="gallery_slider_prev gallery_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>			
		</div>

	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="newsletter_content">
						<div class="section_title_container">
							<div class="section_subtitle">luxury resort</div>
							<div class="section_title"><h2>Our Newsletter</h2></div>
						</div>
						<div class="newsletter_text">
							<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutp at sapien.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your e-mail" required="required">
							<button class="newsletter_button"><span>Subscribe</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter_border_container"><div class="container"><div class="row border_row"><div class="col"><div class="newsetter_border"></div></div></div></div></div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo_container">
						<div class="footer_logo">
							<a href="#" class="text-center">
								<div class="footer_logo_subtitle">Selena</div>
								<div class="footer_logo_title">Hotel</div>
								<div class="footer_logo_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									
									</ul>
								</div>
							</a>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-5 footer_col">
					<div class="footer_menu">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="rooms.html">Rooms</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="booking.html">Booking</a></li>
							
						</ul>
						<div class="footer_menu_text">
							<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
						</div>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_contact clearfix">
						<div class="footer_contact_content float-lg-right">
							<ul>
								<li>Address: <span>101 sa tabitabi street</span></li>
								<li>Phone: <span>+3999 999 9999</span></li>
								<li>Email: <span>siaknumail@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>