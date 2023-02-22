<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 

	$status=$_POST['status'];
	 
	 mysqli_query($con,"UPDATE reservation SET status='finished' where res_id='$res_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully Updated the reservation to Finished!');</script>";
		echo "<script>document.location='finished.php'</script>";
	
} 

else
		{
			echo "<script type='text/javascript'>alert('Error updating reservation');</script>";
					echo "<script>document.location='read-reservation_confirmed.php'</script>";  
		}

