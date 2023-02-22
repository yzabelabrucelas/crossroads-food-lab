<?php
include ('includes/db.php');

function generateRandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomString1($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

	$inq_no = generateRandomString();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contact_no = $_POST['contact_no'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	date_default_timezone_set("Asia/Manila");
	$inq_date = date("Y-m-d H:i:s");
	
		
$result = mysqli_query($con,"SELECT * FROM inquiry"); 
        $count = mysqli_num_rows($result);


include('send-message-inquiry.php');
	
					mysqli_query($con,"INSERT INTO inquiry(inq_no,fname,lname,contact_no,email,subject,message,inq_date,status) 
					VALUES('CFL-INQW-$inq_no','$fname','$lname','$contact_no', '$email','$subject','$message','$inq_date','unread')")or die(mysqli_error()); 
					 
					 
					echo "<script type='text/javascript'>alert('Successfully sent a message we will email you for our response thank you!');</script>";
					echo "<script>document.location='contact.php'</script>";   



/*
$result = mysqli_query($con,"SELECT COUNT (*) FROM inquiry WHERE fname='Ana'");
 $count = mysqli_num_rows($result);

	if ($count <=3)
	 {


 
					mysqli_query($con,"INSERT INTO inquiry(inq_no,fname,lname,contact_no,email,subject,message,inq_date,status) 
					VALUES('CFL-INQW-$inq_no','$fname','$lname','$contact_no', '$email','$subject','$message','$inq_date','unread')")or die(mysqli_error()); 
					 
					 
					echo "<script type='text/javascript'>alert('Successfully sent a message we will email you for our response thank you!');</script>";
					echo "<script>document.location='contact.php'</script>";   


    }

    elseif($count ==3)
    {


					    						echo "<script type='text/javascript'>alert('inquiry already added!');</script>";
					echo "<script>document.location='contact.php'</script>"; 

															
    }
else
{
						    						echo "<script type='text/javascript'>alert('NO INQUIRY SUBMITTED');</script>";
					echo "<script>document.location='contact.php'</script>";  
}*/
?>

