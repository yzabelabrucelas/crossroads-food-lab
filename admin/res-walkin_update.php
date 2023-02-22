<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 
 		$inq_id = $_POST['inq_id'];
		$fname = $_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pax=$_POST['pax'];
        $res_time=$_POST['res_time'];
        $status=$_POST['status'];

	 
	 mysqli_query($con,"UPDATE walkins SET fname='$fname',lname='$lname',email='$email',phone='$phone',pax='$pax',res_time='$res_time',status='$status' where inq_id='$inq_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated customer's reservation!');</script>";
		echo "<script>document.location='walk-in_res.php'</script>";
	
} 

