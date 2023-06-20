
<?php
include 'db.php';
if(isset($_POST["submit"])) {
	
	session_start();
				$email = $_POST['email'];
				$pass = $_POST['password'];
								
								
								


	
	$sqla = "select * from admin where email='$email' and password='$pass'";
	$resulta = $conn->query($sqla);
	$rowa = mysqli_fetch_assoc($resulta);
	$rows = mysqli_num_rows($resulta);
	
	
		if ($rows > 0) {
									   $admin_id=$rowa['id'];
									   header('location:admin-homepage.php');
										$_SESSION['id']=$admin_id;
										$_SESSION['fname'] = $rowa['fname'];
										$_SESSION['lname'] = $rowa['lname'];
										$_SESSION['email'] = $rowa['email'];
										$_SESSION['pass'] = $rowa['password'];
										
								 } else
								 {
									 ?>
									 <script>
				alert('Login Failed.'); 
				window.location = "login.php";  
			</script>
			<?php
		}
		
				

				if (mysqli_query($conn, $insert))
				
					{
					?>
					<script>
						window.location = "admin-homepage.php";  
					</script>
					<?php
				}
	 
							}else {	
			?>
			<script>
				alert('Login Failed.'); 
				window.location = "login.php";  
			</script>
			<?php
		
	
}
	
?>				 
								
	
	
	
	