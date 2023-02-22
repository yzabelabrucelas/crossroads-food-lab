<?php

session_start();
	if (!isset($_SESSION['user_email'])) 
	{
		echo "<script> alert ('You are not an admin, Please log in first!')</script>";

		echo "<script>window.open('admin_login.php','_self')</script>";
	}

	else
	{

?>
<?php

include("includes/db.php");

if (isset($_GET['delete_res'])) {
	
	$delete_id = $_GET['delete_res'];


	$delete_pro1= "INSERT INTO archive_reservation SELECT * FROM reservation WHERE res_id='$delete_id'";
	$delete_pro= "DELETE FROM reservation WHERE res_id='$delete_id'";

	$run_delete = mysqli_query($con,$delete_pro1);
	$run_delete = mysqli_query($con,$delete_pro);

	if ($run_delete) {


		echo "<script>alert('Selected reservation has been deleted!')</script>";
		echo "<script>window.open('tobeprocessed.php','_self')</script>";
	}
}



?>
<?php } ?>