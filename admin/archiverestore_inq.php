<?php

include("includes/db.php");

if (isset($_GET['restore_inq'])) {
	
	$restore_id = $_GET['restore_inq'];


	$restore_cust1= "INSERT INTO inquiry SELECT * FROM archive_inquiry WHERE inq_no='$restore_id'";
	$restore_cust= "DELETE FROM archive_inquiry WHERE inq_no='$restore_id'";

	
	$run_restore = mysqli_query($con,$restore_cust1);
	$run_restore = mysqli_query($con,$restore_cust);

	if ($run_restore) {


		echo "<script>alert('Selected inquiry has been restored!')</script>";
		echo "<script>window.open('archive_inquiry.php#inquiry','_self')</script>";
	}
}



?>