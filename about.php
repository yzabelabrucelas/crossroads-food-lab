<?php 
session_start();
$login_session=$_SESSION['login_user'];

                                global $con;

                                include("admin/includes/db.php");

                                  $get_logo = "select * from logo";
                                  $run_logo = mysqli_query($con, $get_logo);
                                  $row_logo = mysqli_fetch_array($run_logo);
                                            
                                  $logo_ID = $row_logo['id'];
                                  $logo_img = $row_logo['logo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crossroads Food Lab.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">


 <link rel="stylesheet" href="css/style1.css"/>
    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

        <link rel="stylesheet" href="admin/assets/css/hover.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
body
{
font-family: 'Montserrat', sans-serif;
}

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

.border-img
{
border-style: solid;
border-width: 17px 18px;
-moz-border-image: url("img/home/border.png") 19 18 19 20 round repeat;
-webkit-border-image: url("img/home/border.png") 19 18 19 20 round repeat;
-o-border-image: url("img/home/border.png") 19 18 19 20 round repeat;
border-image: url("img/home/border.png") 19 18 19 20 round repeat;
}
</style>
</head>

<?php include('nav/about-nav.php');?>

<?php  
               include("admin/includes/db.php");

                $get_about = "select * from about_us";
                 $run_about = mysqli_query($con, $get_about);
                 $row_about = mysqli_fetch_array($run_about);
                            
                 $history = $row_about['history'];
                 $core_values = $row_about['core_values'];
                 $mission = $row_about['mission'];
                 $vision = $row_about['vision'];

                 $get_contact = "select * from contact_info";
                 $run_contact = mysqli_query($con, $get_contact);
                 $row_contact = mysqli_fetch_array($run_contact);
                            
                 $contact_no = $row_contact['contact_no'];
                 $contact_address = $row_contact['contact_address'];
                 $contact_email = $row_contact['contact_email'];
                 $contact_id = $row_contact['id'];
                 
              ?>
              <body style="background-color: rgb(40,40,40);">
    <!-- Page Content -->
    <br>
<br><br>
<br>    <br>
<br><br>
   <center> <h1 style="font-size: 30px;color: #f1c40f" class="animated infinite pulse">
                    About Us</h1></center>
                <hr style="border-color: rgb(231,76,60);">

    <div class="container">
      
  <div class="row">
     <div class="col-md-12">

     		        <div class="border-img" style="background-color: #f1c40f">
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" allowfullscreen src="https://momento360.com/e/u/80f08d6066fd4fc3a26f37707377b868?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"></iframe>
</div>
        </div>
          



     </div>
  </div>

<br>
    <div class="row">

     <div class="col-md-6">
     	<div class="border-img" style="background-color: #f1c40f">
     		        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.716038749372!2d120.94950961439633!3d14.443521384780016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d27a3d40debb%3A0x8022966de3cd0de7!2sCrossroads+Food+Lab.!5e0!3m2!1sen!2sph!4v1533567238378" allowfullscreen></iframe>
</div>
     	</div>


     </div>


     <div class="col-md-6">
                 <div class="border-img"  style="background-color: #f1c40f">
         <center><h2 style="font-family: 'Teko', sans-serif;color:black"><ins>Our Story</ins></h2></center>
            <h4 style="text-align: justify;text-align: justify;font-family: 'Merienda', cursive;"><blockquote><?php echo $history;?></blockquote></h4>
        </div>
     </div>
  </div>
<br><br>

<!--CORE VALUES, MISSION,  VISION-->
<div class="container border-img" style="background-color: #f1c40f">

    <div class="row">
        <div class="col-md-6">
            <center><h2 style="font-family: 'Teko', sans-serif;color:black"><ins>Our Core Values</ins></h2></center>
            <center><h3 style="color:black;font-size: 20px;font-family: 'Merienda', sans-serif;"><?php echo $core_values;?></h3></center>
             <center><h2 style="color:black;font-family: 'Teko', sans-serif"><ins>Our Mission</ins></h2></center>
            <h3 style="color:black;font-size: 20px;font-family: 'Merienda', sans-serif;"><?php echo $mission;?></h3>
        </div>
        <div class="col-md-6">
            <center><h2 style="font-family: 'Teko', sans-serif;color:black"><ins>Our Vision</ins></h2></center>
            <h3 style="color:black;font-size: 20px;font-family: 'Merienda', sans-serif;"><?php echo $vision;?></h3>
        </div>
    </div>
</div>
</div>
   

<br>
<br>
  <div class="row">

     <div class="col-sm-4">
     	<center>
            <a class="hvr-icon-spin">
                <img src="img/home/loc.png" class="hvr-icon img-responsive" />
                </a>

                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Location</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_address;?></p>
                </center>
            </div>

     	<div class="col-sm-4">
     		<center>
                 <a  class="hvr-icon-spin">
                <img src="img/home/mail.png" class="hvr-icon img-responsive" />
                </a>
                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Email</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_email;?></p>
            </center>
            </div>

			<div class="col-sm-4">
				<center>
                     <a class="hvr-icon-spin">
                <img  src="img/home/call.png" class="hvr-icon img-responsive" />
                </a>
                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Contact</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_no;?> </p>
            </center>
            </div>
</div>
</div>




<?php include('footer.php');?>
    
</body>
</html>