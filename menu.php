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

  .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
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
.example-1 {
  position: relative;
  overflow-y: scroll;
  height: 200px; 
}
.example-1 {
  position: relative;
  overflow-y: scroll;
  height: 200px; 
}
.scrollbar-ripe-malinka::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #f1c40f;
  border-radius: 10px; }

.scrollbar-ripe-malinka::-webkit-scrollbar {
  width: 12px;
  background-color: #f1c40f; }

.scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background: #cb2d3e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


.square::-webkit-scrollbar-track {
  border-radius: 0 !important; }

.square::-webkit-scrollbar-thumb {
  border-radius: 0 !important; }

.thin::-webkit-scrollbar {
  width: 6px; }
</style>
</head>

<body style="background-color: rgb(40,40,40);color:black">
 
 <?php include('nav/menu-nav.php');?>
<br><br><br><br><br><br><br>
    <!-- Page Content -->
    <div class="container">
    

<div class="row">
<center><h1 style="font-family:'Teko',sans-serif;color:#f1c40f" class="animated infinite pulse">Our Packages</h1></center>
                <hr style="border-color: rgb(231,76,60);padding-top: 5px">
            <!-- Blog Entries Column -->
            <div class="col-md-12">

                        <div class="border-img" style="background-color:#f1c40f">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                    <?php  
                                    include("includes/db.php");

                                    $get_cat = "SELECT * from package ORDER BY package_price ASC";
                                    $run_cat = mysqli_query($con, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) 
                                    {
                                        $package_ID = $row_cat['package_ID'];
                                        $package_title = $row_cat['package_title'];
                                        $package_price = $row_cat['package_price'];
                                        $package_desc = $row_cat['package_desc'];

                                    ?>
                                    
                                            <td style="font-size: 20px;font-family:'Montserrat',sans-serif;">
                                              <center><?php echo $package_title; ?></center>
                                            </td>

                                            <td style="font-size: 20px;font-family:'Montserrat',sans-serif"><center>&#8369;<?php echo $package_price; ?></center></td>
                                            <td style="font-size: 20px;font-family:'Montserrat',sans-serif;"><center><?php echo $package_desc; ?></center></td>

                                        </tr>
                                    </thead>
<?php } ?>
                                </table>
                            </div>
                            
                        </div>
</div>
               </div><!--END ROW-->

            </div>
<br><br>

       <div class="container">
        <center><h1 style="font-family:'Teko',sans-serif;color:#f1c40f" class="animated infinite pulse">Our Food Choices</h1></center>
                <hr style="border-color: rgb(231,76,60);padding-top: 5px">
  <div class="row text-center">
          <?php
            include("includes/db.php");
                                     $get_cat = "SELECT * from menu ORDER BY packages";
                                    $run_cat = mysqli_query($con, $get_cat);
              

                                    while ($row_cat = mysqli_fetch_array($run_cat)) 
                                    {
                                        $menu_ID = $row_cat['menu_ID'];
                                        $menu_name = $row_cat['menu_name'];
                                        $packages = $row_cat['packages'];
                                        $details = $row_cat['details'];
                                        $menu_image = $row_cat['menu_image'];

                                    ?>
       <div class="col-md-4">
        <div class="border-img" style="background-color:#f1c40f; padding-left: 15px;padding-right: 15px;">
      <br>
    <center><img src="admin/images/menu/<?php echo $menu_image; ?>" class="hvr-grow" style="width:250px;height:250px"></center>
        <!-- Exaple 1 -->

        <div class="card example-1 scrollbar-ripe-malinka">
            <div class="card-body">
                <h3 style="font-family: 'Teko',sans-serif"><strong><u><?php echo $menu_name; ?></u></strong></h3>
                <i class="fa fa-cutlery fa-2x"></i>
                                <h3 style="font-family: 'Montserrat',sans-serif">Available In</h3>
                <h6 style="font-family: 'Montserrat',sans-serif"><?php echo $packages;?></h6>
                <h5 style="font-family: 'Montserrat',sans-serif"><?php echo $details;?></h5>
               
            </div>
        </div>
        <!-- Exaple 1 -->
</div>
    </div> 
<?php } ?>

         </div>
         <br>
</div>


</div>



<br><br>
<?php include('footer.php');?>

<!-- jQuery -->
<script src="admin/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="admin/assets/js/style1.js"></script>

<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
   
</body>
</html>