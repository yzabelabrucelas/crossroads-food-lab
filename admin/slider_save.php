<?php 

include('includes/db.php');


	$title = $_POST['title'];

	


	$result = mysqli_query($con,"SELECT title FROM slider where title='$title'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {

			$name = $_FILES["image"]["name"];
			if ($name=="")
			{
				$name="default.gif";
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
mysqli_query($con,"INSERT INTO slider(title,slider) 
					VALUES('$title','$name')")or die(mysqli_error()); 
					 
					echo "<script type='text/javascript'>alert('Successfully added new photo!');</script>";
					echo "<script>document.location='home_pictures.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Photo already added!');</script>";
					echo "<script>document.location='home_pictures.php'</script>";  
		}	
?>