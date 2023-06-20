<?php
session_start();

{
			$fname = $_SESSION['fname'];
			$insert="INSERT INTO log(user,dates,times)
				VALUES ('$fname Logged out','$date', '$time')";
				
	 
	 session_destroy();
	
  header('location:index.html');
		}
	

	
?>	
