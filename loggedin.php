<?php
session_start();
$error='';

if(isset($_POST['submit']))
{
	if (empty($_POST['username']) || empty($_POST['password']))
	{
		$error="Username and password did not match";
	}

	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY");
$username=stripslashes($username);
$password=stripslashes($password);


$username=mysqli_real_escape_string($username);
$password=mysqli_real_escape_string($password);

$db=mysqli_select_db("crossroa_crossroads",$connection);
$query=mysqli_query("SELECT * from users where password='$password' AND username='$username'", $db);
$rows=mysqli_num_rows($query);

if($rows>0)
{
	$_SESSION['login_user']=$username;
	header("location:welcome.php");
}

else
{
	$error="Username or Password is incorrect! Please try again!";
	echo "<script type='text/javascript'>alert('$error');</script>";

}

mysqli_close($connection);

	}
}

?>