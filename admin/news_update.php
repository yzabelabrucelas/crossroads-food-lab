<?php
include('includes/db.php');

 if (isset($_POST['update']))
 { 

 	//Function to clean the text data received from post
function dataready($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
} 
 
    $editor_data = dataready($_POST['news_desc']);
 
	//Decoding html codes for storing in DB
	$editor_data_insert = html_entity_decode($editor_data);
	
	$news_id = $_POST['news_id'];
	$news_title = $_POST['news_title'];
	$news_desc = $_POST['news_desc'];

	 
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
					move_uploaded_file($temp, "images/news/".$name);
					  }
					}
		}
	 mysqli_query($con,"UPDATE news SET news_title='$news_title',news_desc='$news_desc',news_pic='$name' where news_id='$news_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated announcement!');</script>";
		echo "<script>document.location='news.php'</script>";
	
} 

