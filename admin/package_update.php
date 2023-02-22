<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 
	$package_ID= $_POST['package_ID'];
	$package_title = $_POST['package_title'];
	$package_price = $_POST['package_price'];	
	$package_desc = $_POST['package_desc'];
	 	
	 mysqli_query($con,"UPDATE package SET package_title='$package_title',package_price='₱$package_price',package_desc='$package_desc' where package_ID='$package_ID'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated package details!');</script>";
		echo "<script>document.location='package.php'</script>";
	
} 

