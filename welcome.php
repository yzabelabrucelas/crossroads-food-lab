<?php 
session_start();
$login_session=$_SESSION['login_user'];

if(empty($login_session))
{
header("location:login.php");
}

global $con;

include("includes/db.php");

$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];


$connection=mysqli_connect("localhost","root","");

$db=mysqli_select_db("crosssroads_crossroa", $connection);
                                    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crossroads Food Lab.</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

  <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

 <link rel="stylesheet" href="css/style1.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>

    /* width */
::-webkit-scrollbar {
    width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background-color: rgb(231,76,60); 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: grey; 
}

  .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.border-img
{
border-style: solid;
border-width: 17px 18px;
-moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
border-image: url(img/home/border.png) 19 18 19 20 round repeat;
}


.fa-4x{
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60); ;
}

.fa-2x{
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60); ;
}



</style>

</head>
<body style="background-color: rgb(40,40,40);">
 <?php include('nav/profile-nav.php');?>
<br><br><br><br><br><br><br><br><br><br>
  <div class="container">


            <br>
            <h1 align="left" style="color:#f1c40f;font-family: 'Teko', sans-serif;">WELCOME <?php echo $login_session;?>, </h1>
                        <hr style="height:30px;border-color: rgb(231,76,60);"> 
            <h5 style="color:white;font-family: 'Montserrat', sans-serif;">You have successfully logged in. Please click on reserve to proceed with your reservation.</h5>

            <a href="reserve.php" style="color:white;font-family: 'Montserrat', sans-serif;" class="btn btn-danger btn-lg"><i class="fa fa-calendar"></i> RESERVE NOW!</a>


</div>

 
<br><br><br>

<?php include('footer.php');?>  


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/style1.js"></script>
  </body>
</html>


