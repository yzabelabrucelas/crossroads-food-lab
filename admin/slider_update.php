<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 

	
	$id = $_POST['id'];
	$title = $_POST['title'];

	 
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
					move_uploaded_file($temp, "images/slider/".$name);
					  }
					}
		}
	 mysqli_query($con,"UPDATE slider SET title='$title',slider='$name' where id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated photo!');</script>";
		echo "<script>document.location='home_pictures.php'</script>";
	
} 

