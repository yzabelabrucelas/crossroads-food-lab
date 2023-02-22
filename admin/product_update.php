<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 


	$menu_ID = $_POST['menu_ID'];
	$menu_name = $_POST['menu_name'];
	$details = $_POST['details'];
	$packages=$_POST['packages'];

	 
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
					move_uploaded_file($temp, "images/menu/".$name);
					  }
					}
		}
	 mysqli_query($con,"UPDATE menu SET menu_name='$menu_name',packages='$packages',details='$details',menu_image='$name' where menu_ID='$menu_ID'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated product!');</script>";
		echo "<script>document.location='product.php'</script>";
	
} 

