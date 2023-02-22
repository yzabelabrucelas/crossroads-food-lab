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
#MULTIPLE INSERT IN DATABASE
if(isset($_POST['packages']))
{
	$packages=implode(",",$_POST['packages']);
}
else 
{
	$packages="";
}

		$menu_ID = generateRandomString();
	$menu_name = $_POST['menu_name'];
	$details=$_POST['details'];



	$result = mysqli_query($con,"SELECT menu_name FROM menu where menu_name='$menu_name'"); 
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
					move_uploaded_file($temp, "images/menu/".$name);
				      }
					}
			}	

mysqli_query($con,"INSERT INTO menu(menu_ID,menu_name,packages,details,menu_image) 
					VALUES(
					'CFL-MENU-$menu_ID',
					'$menu_name',
					'$packages',
					'$details',
					'$name')")or die(mysqli_error()); 
					 
		echo "<script type='text/javascript'>alert('Successfully added new product!');</script>";
					echo "<script>document.location='product.php'</script>"; 
		}
	
?>
