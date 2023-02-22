<?php 

include('includes/db.php');


	$news_title = $_POST['news_title'];
	$news_desc = $_POST['news_desc'];

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
	


	$result = mysqli_query($con,"SELECT news_title FROM news where news_title='$news_title'"); 
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
					move_uploaded_file($temp, "images/news/".$name);
				      }
					}
			}	
mysqli_query($con,"INSERT INTO news(news_title,news_desc,news_pic) 
					VALUES('$news_title','$news_desc','$name')")or die(mysqli_error()); 
					 
					echo "<script type='text/javascript'>alert('Successfully added new announcement!');</script>";
					echo "<script>document.location='news.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Announcement already added!');</script>";
					echo "<script>document.location='news.php'</script>";  
		}	
?>