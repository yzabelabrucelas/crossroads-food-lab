<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 
	$ct_id = $_POST['ct_id'];
	$ct_name = $_POST['ct_name'];
	$ct_desc = $_POST['ct_desc'];
	$ct_date = $_POST['ct_date'];

	 
	 $image = $_FILES["image"]["name"];
		 if ($image=="")
		 {
			$name=$_POST['image1']; 
		 }
		else
		{
			$name = $_FILES["image"]["name"];
			$type = $_FILES["image"]["type"];
			$size = $_FILES["image"]["size"];
			$temp = $_FILES["image"]["tmp_name"];
			$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
				else
					  {
					move_uploaded_file($temp, "images/customer_testimonial/".$name);
					  }
					}
		}
	 mysqli_query($con,"UPDATE customer_testimonial SET ct_name='$ct_name',ct_desc='$ct_desc',ct_date='$ct_date',ct_pic='$name' where ct_id='$ct_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated customer's testimonial!');</script>";
		echo "<script>document.location='customers.php'</script>";
	
} 

