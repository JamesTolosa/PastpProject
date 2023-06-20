<?php
	include 'db.php';
	if(isset($_POST["submit"])) {
   	$content=$_POST['content'];
	
		
		$update="update comment set content='$content' where id='1'";
		if(mysqli_query($conn,$update)){
	?>	
		<script>
		window.location = "admin-homepage.php";  
		</script>
		<?php
		}else {
					?>
			<script>
				window.location = "admin-homepage.php";  
			</script>
			<?php
	}
	}
?>