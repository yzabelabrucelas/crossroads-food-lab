<?php 
                                global $con;

                                include("includes/db.php");

                                  $get_logo = "select * from logo";
                                  $run_logo = mysqli_query($con, $get_logo);
                                  $row_logo = mysqli_fetch_array($run_logo);
                                            
                                  $logo_ID = $row_logo['id'];
                                  $logo_img = $row_logo['logo'];


                                  
?>

<?php 

$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY","crossroa_crossroads");

$db=mysql_select_db("crossroa_crossroads", $connection);


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

 
  <div class="container">
  	
<br><br><br><br><br><br>
 <h1 align="center" style="color:#f1c40f;font-family: 'Teko', sans-serif;" class="animated infinite pulse">Create an Account</h1>
 <center><h4 style="font-family: 'Montserrat',sans-serif;color:white">create an account for faster reservation and cancellation</h4></center>
            <hr style="height:30px;border-color: rgb(231,76,60);">

<div class="col-md-7">
<div style="background-color: #f1c40f;padding-left: 30px;padding-right: 30px" class="border-img">
       <h3 style="margin-left: 20px;font-family: 'Teko',sans-serif;top: 15px"> Please fill the following with 
        <u>correct</u> details to sign up:</h3>
       <br>


    <form method="post" action="sign_up.php">


<div class="row">
               <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            <input type="text" class="form-control input-lg" required name="fname" placeholder="First Name" />
                    </div>
                    <!-- /.input-group -->
          </div>

                    <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            <input type="text" class="form-control input-lg" required name="lname" placeholder="Last Name"/>
                    </div>
                    <!-- /.input-group -->
          </div>
</div>

<br>

<div class="row">
            <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                          </span>
                            <input type="text" class="form-control input-lg" name="email" placeholder="email" required/>
                    </div>
                    <!-- /.input-group -->
          </div>

          <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                          </span>
                             <input type="text" class="form-control input-lg" name="contact_no" placeholder="09XXXXXXX" required maxlength="11" onkeypress="return isNumberKey(event)" id="contact_no"/>
                    </div>
                    <!-- /.input-group -->
          </div>
  
</div>

<br>
<div class="row">
          <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            
                            <input type="text" class="form-control input-lg" required name="username" placeholder="Your username"/>
                    </div>
                    <!-- /.input-group -->
          </div>

                    <div class="col-md-6">
                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon small">
                          <i class="fa fa-lock"></i>
                          </span>
                          <input type="password" name="password" class="form-control input-lg" required placeholder="Your password" />
                    </div>
                    <!-- /.input-group -->
          </div>
        </div>



<br>
            <input type="submit" class="form-control btn btn-danger btn-block" style="font-family: 'Montserrat',sans-serif;" name="save" value="CREATE MY ACCOUNT" />

            <?php
$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY","crossroa_crossroads");

                                    if (isset($_POST['save'])) 
                                    {   


                                          $username= $_POST['username'];
                                          $password= $_POST['password'];
                                          $fname= $_POST['fname'];
                                         $lname= $_POST['lname'];
                                        $email= $_POST['email'];
                                         $contact_no= $_POST['contact_no'];                                          
 

                                          $update_one = "INSERT INTO users(username,password,fname,lname,email,contact_no)
                                        VALUES ('$username','$password','$fname','$lname','$email','$contact_no')";
                                        $result2 = mysqli_query($connection, $update_one);

                                       

                                        if ($result2) 
                                        {
                    include('send-registered_account.php');
                    echo "<script> alert ('Account Registered! Please log in your account')</script>";
                      echo "<script> window.open('login.php','_self')</script>";
                    }

                    else
                    {
                    die ("Error". mysqli_error($connection));
                    }
                                    };     
                                    ?>
<br><br>
    </form>
</div>
</div>

<br><br>
<div class="col-md-5">

<div class="border-img" style="background-color:#f1c40f">
    <h3 style="margin-left: 20px;font-family: 'Teko',sans-serif;text-indent: 15px">WITH YOUR ACCOUNT YOU CAN</h3>
<ul style="list-style-type:none">
  <li style="font-family: 'Montserrat',sans-serif;">&#x029BF; View your previous and recent reservations</li>
  <li style="font-family: 'Montserrat',sans-serif;">&#x029BF; Cancel reservations</li>
</ul>
<br>
</div>
</div>
</div>
<br><br><br><br>
<?php include('footer.php');?>  

<!--NO SPECIALCHARACTERS ON NUMBER INPUT-->
   <script type="text/javascript">
     
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

   </script>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <script src="js/style1.js"></script>
	</body>
</html>