<?php 

include('includes/db.php');
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
		$package_ID = generateRandomString();
	$package_title = $_POST['package_title'];
	$package_price = $_POST['package_price'];	
	$package_desc = $_POST['package_desc'];
	 	


	$result = mysqli_query($con,"SELECT package_ID FROM package where package_title='$package_title'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {
			
mysqli_query($con,"INSERT INTO package(package_ID,package_title,package_price,package_desc) 
					VALUES('CFL-PCKG-$package_ID','$package_title','₱$package_price','$package_desc')")or die(mysqli_error()); 
					 
					echo "<script type='text/javascript'>alert('Successfully added new package!');</script>";
					echo "<script>document.location='package.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Package already added!');</script>";
					echo "<script>document.location='package.php'</script>";  
		}	
?>