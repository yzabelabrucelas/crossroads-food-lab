<?php

include("includes/db.php");

if (isset($_GET['delete_inq'])) {
	
	$delete_id = $_GET['delete_inq'];


	
	$delete_pro= "DELETE FROM archive_inquiry WHERE inq_no='$delete_id'";

	
	$run_delete = mysqli_query($con,$delete_pro);

	if ($run_delete) {


		echo "<script>alert('Selected inquiry has been deleted permanently!')</script>";
		echo "<script>window.open('archive_inquiry.php#inquiry','_self')</script>";
	}
}



?>