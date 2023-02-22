<?php 
session_start();
$login_session=$_SESSION['login_user'];

if(empty($login_session))
{
header("location:login.php");
}
session_unset();
session_destroy();
header("location:login.php");
?>




