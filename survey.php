<?php 
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

    <!-- Custom styles for this template -->



<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script src="js/parallax.js"></script>
    <script src="js/style1.js"></script>

    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>
 <link rel="stylesheet" href="css/style1.css"/>

      <!--SLIDER CSS-->
    <link href="css/slider.css" rel="stylesheet">
    
     <!--SLIDER CSS-->
    <link href="css/custom.css" rel="stylesheet">

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

form .stars {
  background: url("img/stars.png") repeat-x 0 0;
  width: 150px;
  margin: 0 auto;
}

form .stars input[type="radio"] {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
/*----------------Q1---------------*/
form .stars input[type="radio"].star-5:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-4:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-3:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-2:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-1:checked ~ span {
  width: 20%;
}

/*----------------Q2---------------*/
form .stars input[type="radio"].star-10:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-9:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-8:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-7:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-6:checked ~ span {
  width: 20%;
}

/*----------------Q3---------------*/
form .stars input[type="radio"].star-15:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-14:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-13:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-12:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-11:checked ~ span {
  width: 20%;
}

/*----------------Q4---------------*/
form .stars input[type="radio"].star-20:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-19:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-18:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-17:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-16:checked ~ span {
  width: 20%;
}
/*----------------Q5---------------*/
form .stars input[type="radio"].star-25:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-24:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-23:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-22:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-21:checked ~ span {
  width: 20%;
}
/*----------------Q6---------------*/
form .stars input[type="radio"].star-30:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-29:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-28:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-27:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-26:checked ~ span {
  width: 20%;
}
/*----------------Q7---------------*/
form .stars input[type="radio"].star-35:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-34:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-33:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-32:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-31:checked ~ span {
  width: 20%;
}
/*----------------Q8---------------*/
form .stars input[type="radio"].star-40:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-39:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-38:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-37:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-36:checked ~ span {
  width: 20%;
}
/*----------------Q9---------------*/
form .stars input[type="radio"].star-45:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-44:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-43:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-42:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-41:checked ~ span {
  width: 20%;
}
/*----------------Q10---------------*/
form .stars input[type="radio"].star-50:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-49:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-48:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-47:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-46:checked ~ span {
  width: 20%;
}
/*----------------Q11---------------*/
form .stars input[type="radio"].star-55:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-54:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-53:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-52:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-51:checked ~ span {
  width: 20%;
}
/*----------------Q12---------------*/
form .stars input[type="radio"].star-60:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-59:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-58:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-57:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-56:checked ~ span {
  width: 20%;
}
/*----------------Q13---------------*/
form .stars input[type="radio"].star-65:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-64:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-63:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-62:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-61:checked ~ span {
  width: 20%;
}
/*----------------Q14---------------*/
form .stars input[type="radio"].star-70:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-69:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-68:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-67:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-66:checked ~ span {
  width: 20%;
}
/*----------------Q15---------------*/
form .stars input[type="radio"].star-75:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-74:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-73:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-72:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-71:checked ~ span {
  width: 20%;
}

form .stars label {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0!important;
  padding: 0!important;
  text-indent: -999em;
  float: left;
  position: relative;
  z-index: 10;
  background: transparent!important;
  cursor: pointer;
}
form .stars label:hover ~ span {
  background-position: 0 -30px;
}
/*----------------Q1---------------*/
form .stars label.star-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star-1:hover ~ span {
  width: 20% !important;
}
/*--------------Q2-----------*/
form .stars label.star-10:hover ~ span {
  width: 100% !important;
}
form .stars label.star-9:hover ~ span {
  width: 80% !important;
}
form .stars label.star-8:hover ~ span {
  width: 60% !important;
}
form .stars label.star-7:hover ~ span {
  width: 40% !important;
}
form .stars label.star-6:hover ~ span {
  width: 20% !important;
}
/*-------------Q3----------*/
form .stars label.star-15:hover ~ span {
  width: 100% !important;
}
form .stars label.star-14:hover ~ span {
  width: 80% !important;
}
form .stars label.star-13:hover ~ span {
  width: 60% !important;
}
form .stars label.star-12:hover ~ span {
  width: 40% !important;
}
form .stars label.star-11:hover ~ span {
  width: 20% !important;
}
/*-------------Q4----------*/
form .stars label.star-20:hover ~ span {
  width: 100% !important;
}
form .stars label.star-19:hover ~ span {
  width: 80% !important;
}
form .stars label.star-18:hover ~ span {
  width: 60% !important;
}
form .stars label.star-17:hover ~ span {
  width: 40% !important;
}
form .stars label.star-16:hover ~ span {
  width: 20% !important;
}

/*-------------Q5----------*/
form .stars label.star-25:hover ~ span {
  width: 100% !important;
}
form .stars label.star-24:hover ~ span {
  width: 80% !important;
}
form .stars label.star-23:hover ~ span {
  width: 60% !important;
}
form .stars label.star-22:hover ~ span {
  width: 40% !important;
}
form .stars label.star-21:hover ~ span {
  width: 20% !important;
}


/*-------------Q6----------*/
form .stars label.star-30:hover ~ span {
  width: 100% !important;
}
form .stars label.star-29:hover ~ span {
  width: 80% !important;
}
form .stars label.star-28:hover ~ span {
  width: 60% !important;
}
form .stars label.star-27:hover ~ span {
  width: 40% !important;
}
form .stars label.star-26:hover ~ span {
  width: 20% !important;
}

/*-------------Q7----------*/
form .stars label.star-35:hover ~ span {
  width: 100% !important;
}
form .stars label.star-34:hover ~ span {
  width: 80% !important;
}
form .stars label.star-33:hover ~ span {
  width: 60% !important;
}
form .stars label.star-32:hover ~ span {
  width: 40% !important;
}
form .stars label.star-31:hover ~ span {
  width: 20% !important;
}

/*-------------Q8----------*/
form .stars label.star-40:hover ~ span {
  width: 100% !important;
}
form .stars label.star-39:hover ~ span {
  width: 80% !important;
}
form .stars label.star-38:hover ~ span {
  width: 60% !important;
}
form .stars label.star-37:hover ~ span {
  width: 40% !important;
}
form .stars label.star-36:hover ~ span {
  width: 20% !important;
}

/*-------------Q9----------*/
form .stars label.star-45:hover ~ span {
  width: 100% !important;
}
form .stars label.star-44:hover ~ span {
  width: 80% !important;
}
form .stars label.star-43:hover ~ span {
  width: 60% !important;
}
form .stars label.star-42:hover ~ span {
  width: 40% !important;
}
form .stars label.star-41:hover ~ span {
  width: 20% !important;
}

/*-------------Q10----------*/
form .stars label.star-50:hover ~ span {
  width: 100% !important;
}
form .stars label.star-49:hover ~ span {
  width: 80% !important;
}
form .stars label.star-48:hover ~ span {
  width: 60% !important;
}
form .stars label.star-47:hover ~ span {
  width: 40% !important;
}
form .stars label.star-46:hover ~ span {
  width: 20% !important;
}


/*-------------Q11----------*/
form .stars label.star-55:hover ~ span {
  width: 100% !important;
}
form .stars label.star-54:hover ~ span {
  width: 80% !important;
}
form .stars label.star-53:hover ~ span {
  width: 60% !important;
}
form .stars label.star-52:hover ~ span {
  width: 40% !important;
}
form .stars label.star-51:hover ~ span {
  width: 20% !important;
}

/*-------------Q12----------*/
form .stars label.star-60:hover ~ span {
  width: 100% !important;
}
form .stars label.star-59:hover ~ span {
  width: 80% !important;
}
form .stars label.star-58:hover ~ span {
  width: 60% !important;
}
form .stars label.star-57:hover ~ span {
  width: 40% !important;
}
form .stars label.star-56:hover ~ span {
  width: 20% !important;
}

/*-------------Q13----------*/
form .stars label.star-65:hover ~ span {
  width: 100% !important;
}
form .stars label.star-64:hover ~ span {
  width: 80% !important;
}
form .stars label.star-63:hover ~ span {
  width: 60% !important;
}
form .stars label.star-62:hover ~ span {
  width: 40% !important;
}
form .stars label.star-61:hover ~ span {
  width: 20% !important;
}

/*-------------Q14----------*/
form .stars label.star-70:hover ~ span {
  width: 100% !important;
}
form .stars label.star-69:hover ~ span {
  width: 80% !important;
}
form .stars label.star-68:hover ~ span {
  width: 60% !important;
}
form .stars label.star-67:hover ~ span {
  width: 40% !important;
}
form .stars label.star-66:hover ~ span {
  width: 20% !important;
}

/*-------------Q15----------*/
form .stars label.star-75:hover ~ span {
  width: 100% !important;
}
form .stars label.star-74:hover ~ span {
  width: 80% !important;
}
form .stars label.star-73:hover ~ span {
  width: 60% !important;
}
form .stars label.star-72:hover ~ span {
  width: 40% !important;
}
form .stars label.star-71:hover ~ span {
  width: 20% !important;
}



form .stars span {
  display: block;
  width: 0;
  position: relative;
  top: 0;
  left: 0;
  height: 30px;
  background: url("img/stars.png") repeat-x 0 -60px;
  -webkit-transition: -webkit-width 0.5s;
  -moz-transition: -moz-width 0.5s;
  -ms-transition: -ms-width 0.5s;
  -o-transition: -o-width 0.5s;
  transition: width 0.5s;
}
/*-----------------------------------------------------------------*/
.funkyradio label {
  width: 25%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before,
.funkyradio-default input[type="checkbox"]:checked ~ label:before {
  color: #333;
  background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5bc0de;
}

</style>


</head>


<body style="background-color: rgb(40,40,40);">

 <?php include('nav/home-nav.php');?>

    <!-- Page Content -->
    <div class="container">
<br><br><br><br><br><br><br>
            <h1 align="center" style="color:#f1c40f;font-family:'Teko',sans-serif;" class="animated infinite grow">Website Evaluation</h1>
            <h4 align="center" style="color: white;font-family:'Montserrat',sans-serif;">Please take a few moments of your time to answer this survey and help us improve our website.</h4>
 <hr style="border-color: rgb(231,76,60);">

   <!-- Page Content -->
    <div>
    

<div class="row">
<center><h1 style="font-family:'Teko',sans-serif;color:#f1c40f" class="animated infinite pulse">Legend</h1></center>
            <!-- Blog Entries Column -->
            <div class="col-md-12">

                        <div class="border-img" style="background-color:#f1c40f">
                            <div class="table-responsive">
                                <table class="table" id="dataTables-example">
                                    <thead>
                                        <tr>                                
                                    <td><center><h3 style="font-family:'Montserrat',sans-serif;color: black">Very Disatisfied</h3></center></td>
                                    <td><center> <img src="img/rating/very disatisfied.jpg" style="width: 190px; height: 50px"></center></td>
                                        </tr>

                                        <tr>                                
                                    <td><center><h3 style="font-family:'Montserrat',sans-serif;color: black">Disatisfied</h3></center></td>
                                    <td><center> <img src="img/rating/disatisfied.jpg" style="width: 190px; height: 50px"></center></td>
                                        </tr>

                                         <tr>                                
                                    <td><center><h3 style="font-family:'Montserrat',sans-serif;color: black">Okay</h3></center></td>
                                    <td><center> <img src="img/rating/okay.jpg" style="width: 190px; height: 50px"></center></td>
                                        </tr>

                                         <tr>                                
                                    <td><center><h3 style="font-family:'Montserrat',sans-serif;color: black">Satisfied</h3></center></td>
                                    <td><center> <img src="img/rating/satisfied.jpg" style="width: 190px; height: 50px"></center></td>
                                        </tr>

                                         <tr>                                
                                    <td><center><h3 style="font-family:'Montserrat',sans-serif;color: black">Very Satisfied</h3></center></td>
                                    <td><center> <img src="img/rating/very satisfied.jpg" style="width: 190px; height: 50px"></center></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            
                        </div>
</div>
               </div><!--END ROW-->

            </div>

  <form id="ratingsForm" action="survey_test.php" method="post">

              <br>
  <div class="row"><!--ROW FOR EMAIL AND MOBILE-->
          <div class="col-md-6">
                        <label style="color:#f1c40f;font-family:'Montserrat',sans-serif;">First Name</label>
                       <div class="input-group"><!-- EMAIL -->

              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                          <input type="text" class="form-control" name="fname" required>
                    </div>
                    <!-- /.input-group -->
          </div>

          <div class="col-md-6">
            <label style="color:#f1c40f;font-family:'Montserrat',sans-serif;">Last Name</label>
            <div class="input-group"><!-- MOBILE -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            <input type="text" class="form-control" name="lname" required>
                        </div><!-- /.input-group -->
                    </div>

        </div><!--/.ROW FOR EMAIL AND MOBILE-->

<br><br>

<h1 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px" class="animated infinite flash">Questions</h1>


    <!--ONE-->
    <h2 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px" ><ins>A. Functionality</ins></h2>

   <!--Q1--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">1. Ease of Operation</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the process of the system simple?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q1" class="star-1" id="star-1" value="Very Disatisfied" required />
    <label class="star-1" for="star-1">1</label>

    <input type="radio" name="q1" class="star-2" id="star-2" value="Disatisfied" required/>
    <label class="star-2" for="star-2">2</label>

    <input type="radio" name="q1" class="star-3" id="star-3" value="Okay" required/>
    <label class="star-3" for="star-3">3</label>

    <input type="radio" name="q1" class="star-4" id="star-4" value="Satisfied" required/>
    <label class="star-4" for="star-4">4</label>

        <input type="radio" name="q1" class="star-5" id="star-5" value="Very Satisfied" required/>
    <label class="star-5" for="star-5">5</label>

    <span></span>
  </div>
  <br>


 <!--Q2--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">2. Convinience</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system comfortable and convenient to use?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q2" class="star-6" id="star-6" value="Very Disatisfied" required/>
    <label class="star-6" for="star-6">1</label>

    <input type="radio" name="q2" class="star-7" id="star-7" value="Disatisfied" required/>
    <label class="star-7" for="star-7">2</label>

    <input type="radio" name="q2" class="star-8" id="star-8" value="Okay" required/>
    <label class="star-8" for="star-8">3</label>

    <input type="radio" name="q2" class="star-9" id="star-9" value="Satisfied" required/>
    <label class="star-9" for="star-9">4</label>

        <input type="radio" name="q2" class="star-10" id="star-10" value="Very Satisfied" required/>
    <label class="star-10" for="star-10">5</label>

    <span></span>
  </div>
<br>
 <!--Q3--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">3. User Friendly</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system easily operated and understood?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q3" class="star-11" id="star-11" value="Very Disatisfied" required/>
    <label class="star-11" for="star-11">1</label>

    <input type="radio" name="q3" class="star-12" id="star-12" value="Disatisfied" required/>
    <label class="star-12" for="star-12">2</label>

    <input type="radio" name="q3" class="star-13" id="star-13" value="Okay" required/>
    <label class="star-13" for="star-13">3</label>

    <input type="radio" name="q3" class="star-14" id="star-14" value="Satisfied" required/>
    <label class="star-14" for="star-14">4</label>

        <input type="radio" name="q3" class="star-15" id="star-15" value="Very Satisfied" required/>
    <label class="star-15" for="star-15">5</label>

    <span></span>
  </div>

<br>

    <!--TWO-->
    <h2 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px"><ins>B. Content</ins></h2>
 <!--Q4--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">4. Accuracy of Content</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Does the system provide accurate information?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q4" class="star-16" id="star-16" value="Very Disatisfied" required/>
    <label class="star-16" for="star-16">1</label>

    <input type="radio" name="q4" class="star-17" id="star-17" value="Disatisfied" required/>
    <label class="star-17" for="star-17">2</label>

    <input type="radio" name="q4" class="star-18" id="star-18" value="Okay" required/>
    <label class="star-18" for="star-18">3</label>

    <input type="radio" name="q4" class="star-19" id="star-19" value="Satisfied" required/>
    <label class="star-19" for="star-19">4</label>

        <input type="radio" name="q4" class="star-20" id="star-20" value="Very Satisfied" required/>
    <label class="star-20" for="star-20">5</label>

    <span></span>
  </div>

<br>


 <!--Q5--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">5. Updated Content</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Does the system supply recent information?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q5" class="star-21" id="star-21" value="Very Disatisfied" required/>
    <label class="star-21" for="star-21">1</label>

    <input type="radio" name="q5" class="star-22" id="star-22" value="Disatisfied" required/>
    <label class="star-22" for="star-22">2</label>

    <input type="radio" name="q5" class="star-23" id="star-23" value="Okay" required/>
    <label class="star-23" for="star-23">3</label>

    <input type="radio" name="q5" class="star-24" id="star-24" value="Satisfied" required/>
    <label class="star-24" for="star-24">4</label>

        <input type="radio" name="q5" class="star-25" id="star-25" value="Very Satisfied" required/>
    <label class="star-25" for="star-25">5</label>

    <span></span>
  </div>

<br>
 <!--Q6--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">6. Presentation of Content</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system making full use of the space and do not cramp a page full of information?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q6" class="star-26" id="star-26" value="Very Disatisfied" required/>
    <label class="star-26" for="star-26">1</label>

    <input type="radio" name="q6" class="star-27" id="star-27" value="Disatisfied" required/>
    <label class="star-27" for="star-27">2</label>

    <input type="radio" name="q6" class="star-28" id="star-28" value="Okay" required/>
    <label class="star-28" for="star-28">3</label>

    <input type="radio" name="q6" class="star-29" id="star-29" value="Satisfied" required/>
    <label class="star-29" for="star-29">4</label>

        <input type="radio" name="q6" class="star-30" id="star-30" value="Very Satisfied" required/>
    <label class="star-30" for="star-30">5</label>

    <span></span>
  </div>


    <!--THREE-->
    <h2 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px" ><ins>C. Aesthetics</ins></h2>
 <!--Q7--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">7. Color Appeal</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the color combination of the interface pleasing?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q7" class="star-31" id="star-31" value="Very Disatisfied" required/>
    <label class="star-31" for="star-31">1</label>

    <input type="radio" name="q7" class="star-32" id="star-32" value="Disatisfied" required/>
    <label class="star-32" for="star-32">2</label>

    <input type="radio" name="q7" class="star-33" id="star-33" value="Okay" required/>
    <label class="star-33" for="star-33">3</label>

    <input type="radio" name="q7" class="star-34" id="star-34" value="Satisfied" required/>
    <label class="star-34" for="star-34">4</label>

        <input type="radio" name="q7" class="star-35" id="star-35" value="Very Satisfied" required/>
    <label class="star-35" for="star-35">5</label>

    <span></span>
  </div>

<br>

 <!--Q8--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">8.  Attractiveness of Design</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Does the system attract to provoke your interest to use it?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q8" class="star-36" id="star-36" value="Very Disatisfied" required/>
    <label class="star-36" for="star-36">1</label>

    <input type="radio" name="q8" class="star-37" id="star-37" value="Disatisfied" required/>
    <label class="star-37" for="star-37">2</label>

    <input type="radio" name="q8" class="star-38" id="star-38" value="Okay" required/>
    <label class="star-38" for="star-38">3</label>

    <input type="radio" name="q8" class="star-39" id="star-39" value="Satisfied" required/>
    <label class="star-39" for="star-39">4</label>

        <input type="radio" name="q8" class="star-40" id="star-40" value="Very Satisfied" required/>
    <label class="star-40" for="star-40">5</label>

    <span></span>
  </div>

<br>
  

<br>

 <!--Q9--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">9. Appropriateness of Size</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system making the text big enough for the user to see and give text a good color contrast from the background?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q9" class="star-41" id="star-41" value="Very Disatisfied" required/>
    <label class="star-41" for="star-41">1</label>

    <input type="radio" name="q9" class="star-42" id="star-42" value="Disatisfied" required/>
    <label class="star-42" for="star-42">2</label>

    <input type="radio" name="q9" class="star-43" id="star-43" value="Okay" required/>
    <label class="star-43" for="star-43">3</label>

    <input type="radio" name="q9" class="star-44" id="star-44" value="Satisfied" required/>
    <label class="star-44" for="star-44">4</label>

        <input type="radio" name="q9" class="star-45" id="star-45" value="Very Satisfied" required/>
    <label class="star-45" for="star-45">5</label>

    <span></span>
  </div>

<br>
  

 <!--FOUR-->
    <h2 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px" ><ins>D. Reliability</ins></h2>
 <!--Q10--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">10. Conformance to Desired Result</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Does the system meet the user’s defined information?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q10" class="star-46" id="star-46" value="Very Disatisfied" required/>
    <label class="star-46" for="star-46">1</label>

    <input type="radio" name="q10" class="star-47" id="star-47" value="Disatisfied" required/>
    <label class="star-47" for="star-47">2</label>

    <input type="radio" name="q10" class="star-48" id="star-48" value="Okay" required/>
    <label class="star-48" for="star-48">3</label>

    <input type="radio" name="q10" class="star-49" id="star-49" value="Satisfied" required/>
    <label class="star-49" for="star-49">4</label>

        <input type="radio" name="q10" class="star-50" id="star-50" value="Very Satisfied" required/>
    <label class="star-50" for="star-50">5</label>

    <span></span>
  </div>

<br>

 <!--Q8--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">11. Absence of Failure</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system free from failure?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q11" class="star-51" id="star-51" value="Very Disatisfied" required/>
    <label class="star-51" for="star-51">1</label>

    <input type="radio" name="q11" class="star-52" id="star-52" value="Disatisfied" required/>
    <label class="star-52" for="star-52">2</label>

    <input type="radio" name="q11" class="star-53" id="star-53" value="Okay" required/>
    <label class="star-53" for="star-53">3</label>

    <input type="radio" name="q11" class="star-54" id="star-54" value="Satisfied" required/>
    <label class="star-54" for="star-54">4</label>

        <input type="radio" name="q11" class="star-55" id="star-55" value="Very Satisfied" required/>
    <label class="star-55" for="star-55">5</label>

    <span></span>
  </div>

<br>
  

<br>

 <!--Q9--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">12. Accuracy in Performance</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the function of the system accurate?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q12" class="star-56" id="star-56" value="Very Disatisfied" required/>
    <label class="star-56" for="star-56">1</label>

    <input type="radio" name="q12" class="star-57" id="star-57" value="Disatisfied" required/>
    <label class="star-57" for="star-57">2</label>

    <input type="radio" name="q12" class="star-58"" id="star-58" value="Okay" required/>
    <label class="star-58"" for="star-58"">3</label>

    <input type="radio" name="q12" class="star-59" id="star-59" value="Satisfied" required/>
    <label class="star-59" for="star-59">4</label>

        <input type="radio" name="q12" class="star-60" id="star-60" value="Very Satisfied" required/>
    <label class="star-60" for="star-60">5</label>

    <span></span>
  </div>

<br>

 <!--FIVE-->
    <h2 style="color:#f1c40f;font-family:'Teko',sans-serif;padding-left: 150px" ><ins>E. Availability</ins></h2>
 <!--Q10--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">13. Performs According to Specification</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Does the system perform accordingly to its standard and effectiveness required?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q13" class="star-61" id="star-61" value="Very Disatisfied" required/>
    <label class="star-61" for="star-61">1</label>

    <input type="radio" name="q13" class="star-62" id="star-62" value="Disatisfied" required/>
    <label class="star-62" for="star-62">2</label>

    <input type="radio" name="q13" class="star-63" id="star-63" value="Okay" required/>
    <label class="star-63" for="star-63">3</label>

    <input type="radio" name="q13" class="star-64" id="star-64" value="Satisfied" required/>
    <label class="star-64" for="star-64">4</label>

        <input type="radio" name="q13" class="star-65" id="star-65" value="Very Satisfied" required/>
    <label class="star-65" for="star-65">5</label>

    <span></span>
  </div>

<br>

 <!--Q8--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">14. Provisions for Security Requirements</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system protecting your data against unauthorized users?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q14" class="star-66" id="star-66" value="Very Disatisfied" required/>
    <label class="star-66" for="star-66">1</label>

    <input type="radio" name="q14" class="star-67" id="star-67" value="Disatisfied" required/>
    <label class="star-67" for="star-67">2</label>

    <input type="radio" name="q14" class="star-68" id="star-68" value="Okay" required/>
    <label class="star-68" for="star-68">3</label>

    <input type="radio" name="q14" class="star-69" id="star-69" value="Satisfied" required/>
    <label class="star-69" for="star-69">4</label>

        <input type="radio" name="q14" class="star-70" id="star-70" value="Very Satisfied" required/>
    <label class="star-70" for="star-70">5</label>

    <span></span>
  </div>

<br>
  

<br>

 <!--Q9--> 
        <center><h3 style="color: white;font-family:'Montserrat',sans-serif;color:rgb(231,76,60);">15. Completeness of the System</h3>
          <h6 style="color: white;font-family:'Montserrat',sans-serif;">Is the system having all necessary parts, and components?</h6>
        </center>

  <div class="stars">
    <input type="radio" name="q15" class="star-71" id="star-71" value="Very Disatisfied" required/>
    <label class="star-71" for="star-71">1</label>

    <input type="radio" name="q15" class="star-72" id="star-72" value="Disatisfied" required/>
    <label class="star-72" for="star-72">2</label>

    <input type="radio" name="q15" class="star-73" id="star-73" value="Okay" required/>
    <label class="star-73" for="star-73">3</label>

    <input type="radio" name="q15" class="star-74" id="star-74" value="Satisfied" required/>
    <label class="star-74" for="star-74">4</label>

        <input type="radio" name="q15" class="star-75" id="star-75" value="Very Satisfied" required/>
    <label class="star-75" for="star-75">5</label>

    <span></span>
  </div>

<br>



 <center><button type="submit" name="submit" class="btn btn-lg btn-danger animated infinite flash">Submit Answers</button></center>

</form>

            </div>
<br><br><br>
<?php include('footer.php');?>


 <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  
</body>
</html>