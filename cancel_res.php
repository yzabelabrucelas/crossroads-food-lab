<?php
include('includes/db.php');

 if (isset($_POST['cancel']))
 { 

	$status = $_POST['status'];
	 

	 mysqli_query($con,"UPDATE reservation SET status='cancelled'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('You successfully cancelled your reservation!');</script>";
		echo "<script>document.location='index.php'</script>";
	
} 

