<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact_no = $_POST['contact_no'];
  $email = $_POST['email'];
 $res_date = date('Y-m-d', strtotime($_POST['res_date']));
  $pax= $_POST['pax'];
  $res_time=$_POST['res_time'];
  $status=$_POST['status'];

	 
	 mysqli_query($con,"UPDATE reservation SET fname='$fname',lname='$lname',email='$email',contact_no='$contact_no',pax='$pax',res_time='$res_time',status='$status' where res_id='$res_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated customer's reservation!');</script>";
		echo "<script>document.location='online_res.php'</script>";
	
} 

