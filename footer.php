<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

    <!-- Custom styles for this template -->

<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="js/style1.js"></script>

    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>
 <link rel="stylesheet" href="css/style1.css"/>

</head>
<style>
    p,h1,h2,h4{
        color: black;
font-family: 'Teko', sans-serif;
    }



        /*footer*/
    .footer {
    padding: 10px 0 10px 0;
    background-color:#f1c40f;
    color: black;
font-family: 'Montserrat', sans-serif;

}
.footer .title
{text-align: left;
  color:#fff;
  font-size:30px;
  text-align: center;

}


.footer .social-icon{padding:0px;margin:0px;}
.footer .social-icon a{display:inline-block;color:#fff;font-size:25px;padding:5px;}
.footer .acount-icon a{display:block;color:#fff;font-size:18px;padding:5px;text-decoration:none;}
.footer .acount-icon .fa{margin-right:25px;}


.footer .category a {
    text-decoration: none;
    color: #fff;
    display: inline-block;
    padding: 5px 20px;
    margin: 1px;
    border-radius:4px;
    margin-top: 6px;
    font-size: 15px;
    background-color: #34495e;
    border: solid 1px #7f8c8d;
        font-family: "Montserrat",sans-serif;
}


}
</style> 
    <body>
       <!-- FOOTER START================== -->
    <footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
            <h1><center>Crossroads Food Lab.</center></h1>
            <h3 style="text-align: justify;">a restaurant serving moderately priced simple meals in a modest setting. Try our delicious but affordable food with a unique and different taste</h3>
            <center>
            <ul class="social-icon">
            <a href="#" class="social" title="Facebook">
                <i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="social" title="Instagram"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
            </ul>
            </center>
            </div>
<!--
        <div class="col-sm-3">
            <h4 class="title">My Account</h4>
            <span class="acount-icon">          
            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Wish List</a>
            <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Food Cart</a>
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>           
          </span>
            </div>
-->
        <div class="col-sm-4">
            <h1><center>Food Tag</center></h1>
            <div class="category">
                <?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from package")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $package_ID=$row['package_ID'];
        $package_title=$row['package_title'];

?>
            <a href="menu.php" style="font-family: 'Teko',sans-serif;"><i class="fa fa-tag"><?php echo $package_title;?></i></a> 

            <?php }?>      
            </div>
            </div>


        <div class="col-md-4">
            <h1><center>Available Coming Soon on:</center></h1>
            <div class="paymebt">

          <a class="navbar-brand" href="Crossroads.apk">
                <center><img src="img/android.png" class="img-rounded" width="150px" height="50px"/></center>
            </a>
                      <a class="navbar-brand" href="#">
                <center><img src="img/ios.png" class="img-rounded" width="150px" height="50px"/></center>
            </a>
            </div>
            </div>

        </div>
        <hr>
        
        <div class="row text-center"> © 2018. Crossroads Food Lab.</div>
        </div>
        
        
    </footer>
    <!--./END FOOTER-->
     <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
    </body>
    </html>