
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

<body>

  <div class="super_container">
<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="index.html" class="text-center">
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
		</div>
	</header>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
			
			<?php
								include 'db.php';
									if ($_SERVER['REQUEST_METHOD']== "POST") {
							
								session_start();
								$email = $_POST['email'];
								$pass = $_POST['pass'];
							
								
								$sqla = "select * from admin where email='$email' and password='$pass'";
								$resulta = $conn->query($sqla);
								$rowa = mysqli_fetch_assoc($resulta);
								$rows = mysqli_num_rows($resulta);
								
									
								 

								 if ($rows > 0) {
									   $admin_id=$rowa['id'];
									   $_SESSION['fname']=$admin_id;
									   header('location:admin-homepage.php');
										$_SESSION['id']=$admin_id;
								 }
								else {	
									?>
									<script>
										alert('Login Failed.'); 
										window.location = "login.php";  
									</script>
									<?php
									}
								}
								// Sanitize data
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
			?>	

			  
			  

			  
			  
			  
			  
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to Selena Hotel!</h1>
                  </div>
                  <form class="user" action="savelog.php" method="post">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
					
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
					
					             
					
                    <button name= "submit"  type="submit" class="btn btn-primary btn-user btn-block"> Login </button>
					
                    <hr>
                  
                  
                  </form>
                  <hr>
				  
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
				  
				  <div class="text-center">
				  <a class="small" href="admin-homepage.php">--->BACK<---</a>
				  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

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
