<?php

include("includes/db.php");

if (isset($_GET['restore_res'])) {
	
	$restore_id = $_GET['restore_res'];


	$restore_cust1= "INSERT INTO reservation SELECT * FROM archive_reservation WHERE res_id='$restore_id'";
	$restore_cust= "DELETE FROM archive_reservation WHERE res_id='$restore_id'";

	
	$run_restore = mysqli_query($con,$restore_cust1);
	$run_restore = mysqli_query($con,$restore_cust);

	if ($run_restore) {


		echo "<script>alert('Selected reservation has been restored!')</script>";
		echo "<script>window.open('archive_reservation.php#inquiry','_self')</script>";
	}
}



?>