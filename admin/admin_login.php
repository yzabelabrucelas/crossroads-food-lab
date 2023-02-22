<?php 
global $con;

include("includes/db.php");


$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];


$get_user = "select * from admin";
$run_user = mysqli_query($con, $get_user);
$row_user = mysqli_fetch_array($run_user);
                                            
$user_ID = $row_user['user_ID'];
$user_email = $row_user['user_email'];
$user_pass = $row_user['user_pass'];
$user_pic = $row_user['user_pic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crossroads Food Lab | Login</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image" href="images/<?php echo"$logo_img" ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login_css/style1.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" href="AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login_css/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login_css/util.css">
  <link rel="stylesheet" type="text/css" href="login_css/main.css">
<!--===============================================================================================-->
<style type="text/css">
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
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="post">
          <span class="login100-form-logo" style="background-color: black">
            <i class=""><img src="images/crossroads.ico" class="img-responsive img-circle"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="user_email" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login">
              Login
            </button>
          </div>

        </form>

         <?php  

                              session_start();

                include("includes/db.php");

                    if (isset($_POST['login'])) 
                    {
                        $user_email = $_POST['user_email'];
                        $user_pass = $_POST['user_pass'];

                        $sel_user = "SELECT * from admin WHERE user_email='$user_email' AND user_pass='$user_pass'";
                        $run_user = mysqli_query($con, $sel_user);

                        $check_user = mysqli_num_rows($run_user);


                        if($check_user)
                        {
                            $_SESSION['user_email'] = ($_POST['user_email']);
                            echo "<script>alert('Successfully logged in')</script>";
                            echo "<script>window.open('dashboard.php','_self')</script>";

                        }

                        else
                        { 
                            echo "<script>alert('Logged in failed!!')</script>";
                        }

                    }

              ?>                    
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="login_js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
  <script src="login_js/style1.min.js"></script>
<!--===============================================================================================-->
  <script src="login_js/main.js"></script>

</body>
</html>


