<?php 
include("includes/db.php");
global $con;
session_start();
$error='';
// $connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY");
mysqli_connect("localhost","root","","crossroads_crossroa");
//$db=mysqli_select_db("crossroa_crossroads",$connection);


//if button is clicked
// if(isset($_POST['submit']))
// {
//     	$username=$_POST['username'];
// 		$password=$_POST['password'];

		
		
// 	if (empty($_POST['username']) || empty($_POST['password']))
// 	{
// 		$error="Username and password did not match";

// 	}

// 	else
// 	{

//             		$username=stripslashes($username);
//         $password=stripslashes($password);
        
//         $username=mysqli_real_escape_string($username);
//         $password=mysqli_real_escape_string($password);
            
//             $query=mysqli_query( $connection,"SELECT * from users where password='$password' AND username='$username'");
//             $rows=mysqli_num_rows($query);
            
//             if($rows > 0){
//                 echo $username;
//                 die();
//             }else{
//                 echo "false"
//                 die();
//             }
            
//             // if($rows>0)
//             // {
//             // 	$_SESSION['login_user']=$username;
//             // 	header("location:welcome.php");
//             // }
            
//             // else
//             // {
//             // 	$error="Username or Password is incorrect! Please try again!";
//             // 	echo "<script type='text/javascript'>alert('$error');</script>";
            
//             // }

//             mysqli_close($connection);

// 	}
// }
if(!empty($_SESSION["login_user"])){
   header("Location: welcome.php");
}

if(isset($_POST["submit"])){
   $username = $_POST["username"];
   $password = $_POST["password"];
   
   if(empty($username) || empty($password)){
       $error="Username and password did not match";
   }else{
        $username=stripslashes($username);
        $password=stripslashes($password);
            
        $username=mysqli_real_escape_string($con,$username);
        $password=mysqli_real_escape_string($con,$password);
        // $query=mysqli_query( $con,"SELECT * from users where password='$password' AND username='$username'");
        // if($query){
        //     echo "yes query";
        // }else{
        //     echo "snap";
        // }
        
        $q = "SELECT * from users where username='$username' AND password='$password'";
        $query=mysqli_query( $con,$q);
        $rows=mysqli_num_rows($query);
        if($rows > 0){
            //echo "found";
            $_SESSION['login_user']=$username;
            header("location:welcome.php");
        }else{
            //echo "not found";
            $error="Username or Password is incorrect! Please try again!";
            echo "<script type='text/javascript'>alert('$error');</script>";
        }
      }
    }
      
   
//   }
// }

    // $get_logo = "select * from logo";
    // $run_logo = mysqli_query($connection, $get_logo);
    // $row_logo = mysqli_fetch_array($run_logo);
                                                
    // $logo_ID = $row_logo['id'];
    // $logo_img = $row_logo['logo'];
    


                                        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crossroads Food Lab.</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

    <link rel="stylesheet" href="admin/assets/css/animate.css" />
    <link rel="stylesheet" href="admin/assets/css/hover.css" />

    <link rel="stylesheet" href="css/style1.css" />

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
        background-color: rgb(231, 76, 60);
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

    .border-img {
        border-style: solid;
        border-width: 17px 18px;
        -moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
        -webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
        -o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
        border-image: url(img/home/border.png) 19 18 19 20 round repeat;
    }


    .fa-4x {
        margin: 0 auto;
        float: none;
        display: table;
        color: rgb(231, 76, 60);
        ;
    }

    .fa-2x {
        margin: 0 auto;
        float: none;
        display: table;
        color: rgb(231, 76, 60);
        ;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    </style>

</head>

<body style="background-color: rgb(40,40,40);">
    <?php include('nav/profile-nav.php');?>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">


        <h1 align="left" style="color:#f1c40f;font-family: 'Teko', sans-serif;">DON'T HAVE AN ACCOUNT?</h1>
        <a style="font-family: 'Montserrat',sans-serif;color:white" class="animated infinite pulse"
            href="sign_up.php">create an account for faster reservation and cancellation</a>
        <hr style="height:30px;border-color: rgb(231,76,60);">


        <br>
        <h1 align="left" style="color:#f1c40f;font-family: 'Teko', sans-serif;">SIGN INTO YOUR ACCOUNT</h1>
        <hr style="height:30px;border-color: rgb(231,76,60);">

        <form action="login.php" method="post">
            <div class="col-md-6">
                <h5 style="color:white;font-family: 'Montserrat', sans-serif;">Your Username</h5>
                <div class="input-group">
                    <!-- USERNAME -->
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>

                    <input type="text" class="form-control input-lg" required name="username" placeholder="Username" />
                </div>
                <!-- /.input-group -->

                <h5 style="color:white;font-family: 'Montserrat', sans-serif;">Your Password</h5>
                <div class="input-group">
                    <!-- PASSWORD -->
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </span>

                    <input type="password" class="form-control input-lg" required name="password"
                        placeholder="Password" />
                </div>
                <br><br>
                <button type="submit" name="submit" class="btn btn-danger"
                    style="font-family: 'Montserrat',sans-serif;width:50%">SIGN IN</button>


            </div>
        </form>
    </div>


    <br><br><br>

    <?php include('footer.php');?>


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/style1.js"></script>
</body>

</html>