<?php 
session_start();
$login_session=$_SESSION['login_user'];

                                global $con;

                                include("includes/db.php");

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

.border-img
{
border-style: solid;
border-width: 17px 18px;
-moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
border-image: url(img/home/border.png) 19 18 19 20 round repeat;
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
    background-color: rgb(231,76,60);; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: grey; 
}

.counter {
    background-color:#f1c40f;
    padding: 20px 0;
    border-radius: 20px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 30px;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60);
}
.clients-name {
  display: inline-block;
  border-top: 1px solid #eee;
  padding-top: 20px;
  margin-top: 10px;
}
</style>
</head>

<body style="background-color: rgb(40,40,40);color:black">
 
 <?php include('nav/gallery-nav.php');?>

    <!-- Page Content -->
    <div class="container">
<br><br><br><br><br><br><br><br>
<h1 style="color:#f1c40f;font-size: 40px" class="animated infinite pulse"><center>Our Place</center></h1>
 <hr style="border-color: rgb(231,76,60);padding-top: 5px">

        <div class="row">
               
          <?php
            include("includes/db.php");
                                     $get_cat = "select * from gallery_place";
                                    $run_cat = mysqli_query($con, $get_cat);
              

                                    while ($row_cat = mysqli_fetch_array($run_cat)) 
                                    {
                                        $gp_id = $row_cat['gp_id'];
                                        $gp_title = $row_cat['gp_title'];
                                        $gp_pic = $row_cat['gp_pic'];


                                    ?>
          
            <a href="admin/images/place/<?php echo $gp_pic; ?>" data-lightbox="gallery">
              <img src="admin/images/place/<?php echo $gp_pic; ?>" class="border-img hvr-grow" style="width:370px;margin-left:10px;height:400px;margin-top:30px;">
            </a>
          
          <?php } ?>  
        </div>





       </div>


<div class="container">
  <h1 style="color:#f1c40f;font-size: 40px" class="animated infinite pulse"><center>Testimonials</center></h1>
 <hr style="border-color: rgb(231,76,60);padding-top: 5px">
  <div class="row text-center">
<?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from customer_testimonial")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $ct_id=$row['ct_id'];
        $ct_name=$row['ct_name'];
        $ct_desc=$row['ct_desc'];
        $ct_date=$row['ct_date'];
        $ct_pic=$row['ct_pic'];

?>
    <div class="col-md-4">

          <div class="counter">
            <img src="admin/images/customer_testimonial/<?php echo $ct_pic; ?>" class="img-thumbnail" style="width:250px;height:250px">
            <br><br>
           <i class="fa fa-quote-left fa-2x"></i>
              <p style="font-size: 20px;font-family: 'Merienda', sans-serif;"><?php echo $ct_desc;?></p>
              <div class="clients-name">
                <p style="font-size: 20px;font-family: 'Montserrat', sans-serif;"><strong><?php echo $ct_name;?></strong></p>
                  
                 <p style="font-size: 20px;font-family: 'Teko', sans-serif;"> <em><i class="fa fa-clock-o"></i> <?php echo $ct_date;?></em></p>
              </div>
            
    </div><br>
    </div> 
<?php } ?>

         </div>
         <br>
</div>









<br><br>
<?php include('footer.php');?>


<!-- jQuery -->
<script src="admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
</body>
</html>