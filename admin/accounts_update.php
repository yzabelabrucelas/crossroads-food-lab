<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 
	$user_ID= $_POST['user_ID'];
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
	 
	 
	 mysqli_query($con,"UPDATE admin SET user_email='$user_email',user_pass='$user_pass' where user_ID='$user_ID'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated user account!');</script>";
		echo "<script>document.location='accounts.php'</script>";
	
} 

