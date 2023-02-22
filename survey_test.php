<?php

include('includes/db.php');



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];

		if(isset($_POST['q1']) && ($_POST['q2']) && ($_POST['q3']) && ($_POST['q4']) && ($_POST['q5'])  && ($_POST['q6'])  && ($_POST['q7'])  && ($_POST['q8'])  && ($_POST['q9'])  && ($_POST['q10'])  && ($_POST['q11'])  && ($_POST['q12'])  && ($_POST['q13'])  && ($_POST['q14'])  && ($_POST['q15'])) 
		{


			mysqli_query($con,"INSERT INTO rating(fname,lname,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15) 
					VALUES('$fname','$lname','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15')")or die(mysqli_error()); 

					
		echo "<script type='text/javascript'>alert('Answers already submitted! Thank you!');</script>";
					echo "<script>document.location='survey.php'</script>";  

		}







?>

















?>