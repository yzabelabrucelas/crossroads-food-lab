<?php 

include('includes/db.php');
	
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];


	$result = mysqli_query($con,"SELECT user_email FROM admin where user_email='$user_email'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {

			
mysqli_query($con,"INSERT INTO admin(user_email,user_pass) 
					VALUES('$user_email','$user_pass')")or die(mysqli_error()); 
					 
					echo "<script type='text/javascript'>alert('Successfully added new user!');</script>";
					echo "<script>document.location='accounts.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('User already added!');</script>";
					echo "<script>document.location='accounts.php'</script>";  
		}	
?>