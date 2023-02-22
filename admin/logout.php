<?php
	session_start();

	if (!isset($_SESSION['user_email'])) 
	{
		echo "<script> alert ('You are not an admin, Please log in first!')</script>";
		echo "<script>window.open('admin_login.php','_self')</script>";
	}

	else
	{
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login_css/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login_css/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login_css/util.css">
  <link rel="stylesheet" type="text/css" href="login_css/main.css">
<!--===============================================================================================-->
<style>
    html {
    background: url("img/bg.png") no-repeat center fixed; 
    background-size: cover;
}
/*
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 7s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
*/
.itext
{
  color: white;
  font-size: 30px;
}
.lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-spinner div {
  transform-origin: 32px 32px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 29px;
  width: 5px;
  height: 14px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}


.wrap-login100 {
  width: 500px;
  border-radius: 10px;
  overflow: hidden;
  padding: 55px 55px 37px 55px;

background: #BA8B02;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #181818, #BA8B02);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #181818, #BA8B02); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.login100-form-btn {
  font-family: Poppins-Medium;

background: rgb(255,204,26);  /* fallback for old browsers */

  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.container-login100::before {
   opacity: 0.4;
    filter: alpha(opacity=40); /* For IE8 and earlier */
 /* background-color: rgba(255,255,255,0.9);*/
}
</style>
</head>
<body>
  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
     <div class="wrap-login100">
<div style="width:100%;text-align:center;vertical-align:bottom">
   
<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  <?php  
session_unset();
session_destroy();
 echo '<meta http-equiv="refresh" content="5;url=admin_login.php">';


?>
<?php } ?>
</div>
<?php 
 echo'<span class="itext">Logging out. Please wait!</span>';
 ?>
</div>

</div>
</div>
</body>
</html>
