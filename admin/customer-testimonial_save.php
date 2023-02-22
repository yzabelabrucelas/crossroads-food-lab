<?php 

include('includes/db.php');
	
	$ct_name = $_POST['ct_name'];
	$ct_desc = $_POST['ct_desc'];
	$ct_date = $_POST['ct_date'];

	$result = mysqli_query($con,"SELECT ct_name FROM customer_testimonial where ct_name='$ct_name'"); 
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
					move_uploaded_file($temp, "images/customer_testimonial/".$name);
				      }
					}
			}	
mysqli_query($con,"INSERT INTO customer_testimonial(ct_name,ct_desc,ct_date,ct_pic) 
					VALUES('$ct_name','$ct_desc','$ct_date','$name')")or die(mysqli_error()); 
					 
					echo "<script type='text/javascript'>alert('Successfully added new customer testimonial!');</script>";
					echo "<script>document.location='customers.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Testimonial already added!');</script>";
					echo "<script>document.location='customers.php'</script>";  
		}	
?>