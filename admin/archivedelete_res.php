<?php

include("includes/db.php");

if (isset($_GET['delete_res'])) {
	
	$delete_id = $_GET['delete_res'];


	
	$delete_pro= "DELETE FROM archive_reservation WHERE res_id='$delete_id'";

	
	$run_delete = mysqli_query($con,$delete_pro);

	if ($run_delete) {


		echo "<script>alert('Selected reservation has been deleted permanently!')</script>";
		echo "<script>window.open('archive_reservation.php#reservation','_self')</script>";
	}
}



?>