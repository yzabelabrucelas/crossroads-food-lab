<?php 
session_start();
$login_session=$_SESSION['login_user'];

if(empty($login_session))
{
header("location:login.php");
}

$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY","crossroa_crossroads");

$db=mysql_select_db("crossroa_crossroads", $connection);
global $con;

include("includes/db.php");

$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];


$res = "SELECT * from users where username ='$login_session'";
$run = mysqli_query($con, $res); 
$row=mysqli_fetch_array($run); 

$login_session=$_SESSION['login_user'];
$res_id = $row['res_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$contact_no = $row['contact_no']; 


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
    color: rgb(231,76,60);
}

.fa-2x{
    margin: 0 auto;
    float: none;
    display: table;
    color: rgb(231,76,60);
}

.tabs {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 ;
  background-color:#f1c40f;

}
#tab-button {
  display: table;
  table-layout: fixed;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
}
#tab-button li {
  display: table-cell;
  width: 20%;

}
#tab-button li a {
  display: block;
  padding: .5em;
  background: #eee;
  border: 1px solid #ddd;
  text-align: center;
  color: #000;
  text-decoration: none;

}
#tab-button li:not(:first-child) a {
  border-left: none;
}
#tab-button li a:hover,
#tab-button .is-active a {
  border-color: rgb(40,40,40);
  border-width: 2px;
  background: #f1c40f;

}
.tab-contents {
  padding: .5em 2em 1em;
  border: 1px solid #ddd;
}



.tab-button-outer {
  display: none;
}
.tab-contents {
  margin-top: 20px;
}
@media screen and (min-width: 768px) {
  .tab-button-outer {
    position: relative;
    z-index: 2;
    display: block;
  }
  .tab-select-outer {
    display: none;
  }
  .tab-contents {
    position: relative;
    top: -1px;
    margin-top: 0;
  }
}

</style>

</head>
<body style="background-color: rgb(40,40,40);">
    
 <?php include('nav/profile-nav.php');?>
<br><br>
  <div class="container">
 <div class="container">
<h1 style="color:#f1c40f;font-family: 'Teko',sans-serif"><center>MY ACCOUNT</center></h1>
 <hr style="border-color: rgb(231,76,60);">
</div>

              <div class="tabs">
  <div class="tab-button-outer">
    <ul id="tab-button" >
      <li><a href="#tab01" style="font-size: 15px"><i class="fa fa-user fa-2x"></i> My Profile</a></li>
      <li><a href="#tab02" style="font-size: 15px"><i class="fa fa-edit fa-2x"></i> Update Profile</a></li>
      <li><a href="#tab03" style="font-size: 15px"><i class="fa fa-calendar fa-2x"></i> Reservations</a></li>
    </ul>
  </div>
  <div class="tab-select-outer">
    <select id="tab-select">
      <option value="#tab01">My Profile</option>
      <option value="#tab02">Update Profile</option>
      <option value="#tab03">Reservations</option>
    </select>
  </div>

  <div id="tab01" class="tab-contents">
        <h3><a href="logout.php"  class="btn btn-danger animated infinite flash" style="color:white;font-family: 'Montserrat', sans-serif;font-size: 15px;float: right;" ><i class="fa fa-sign-out"></i>Log Out</a></h3>
    <h2 style="color:black;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $fname;?> <?php echo $lname;?></h2>


    <p> <h3 style="color:black;font-family: 'Teko', sans-serif;"><u>Username:</u> <?php echo $login_session;?></h3>
            <h3 style="color:black;font-family: 'Teko', sans-serif;"><u>Email:</u> <?php echo $email;?></h3>
                  <h3 style="color:black;font-family: 'Teko', sans-serif;"><u>Contact No:</u> <?php echo $contact_no;?></h3></p>
  </div>
  <div id="tab02" class="tab-contents">
    <h2 style="color:black;font-family: 'Montserrat', sans-serif;" align="center">Update Details</h2>


    <p><form method="post" action="profile.php">

<div class="row">
          <div class="col-md-6">
<label>Your Username</label>
                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                              <input type="hidden" name="id" value="<?php echo $res_id; ?>">
                            <input type="text" name="username" placeholder="User Name" class="form-control input-md" value="<?php echo $login_session;?>" readonly>
                    </div>
                    <!-- /.input-group -->
          </div>

                    <div class="col-md-6">
                      <label>Your Password</label>
                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-lock"></i>
                          </span>
                          <input type="password" name="password" placeholder="Password" class="form-control input-md" value="<?php echo $password; ?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>
        </div>


<div class="row">


                              <div class="col-md-6">
                      <label>First Name</label>
                       <div class="input-group">
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                          <input type="text" name="fname" placeholder="First Name" class="form-control input-md" value="<?php echo $fname; ?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>

                    <div class="col-md-6">
                      <label>Last Name</label>
                       <div class="input-group">
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
<input type="text" name="lname" placeholder="Last Name" class="form-control input-md" value="<?php echo $lname; ?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>
        </div>


        <div class="row">


                              <div class="col-md-6">
                      <label>Email</label>
                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                          </span>
                          <input type="email" name="email" placeholder="Email" class="form-control input-md" value="<?php echo $email; ?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>

                    <div class="col-md-6">
                      <label>Contact No</label>
                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                          </span>
<input type="text" name="contact_no" placeholder="09XXXXXX" class="form-control input-md" value="<?php echo $contact_no; ?>" required maxlength="11" onkeypress="return isNumberKey(event)" id="contact_no">
                    </div>
                    <!-- /.input-group -->
          </div>
        </div>
<br>
<input type="submit" name="update" value="UPDATE" class="btn btn-danger btn-block" style="font-family: 'Montserrat',sans-serif;">
<br>

  <?php
$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY","crossroa_crossroads");


                                    if (isset($_POST['update'])) 
                                    {   


                                          $password= $_POST['password'];
                                          $login_session= $_POST['username'];
                                          $fname= $_POST['fname'];
                                          $lname= $_POST['lname'];
                                           $email= $_POST['email'];
                                          $contact_no= $_POST['contact_no'];

                                        $update_one = "UPDATE users SET 
                                       username='$login_session',
                                        password='$password', 
                                        fname='$fname', lname='$lname', 
                                        email='$email', 
                                        contact_no='$contact_no' 
                                        WHERE username ='$login_session'"; 
                                        $result2 = mysqli_query($connection, $update_one);

                                       

                                        if ($result2) 
                                        {
                    echo "<script> alert ('Successfully updated!')</script>";
                      echo "<script> window.open('profile.php','_self')</script>";
                    }

                    else
                    {
                    die ("Error". mysqli_error($connection));
                    }
                                    };     
                                    ?>
                </form></p>
  </div>
  <div id="tab03" class="tab-contents">
    <h2 style="color:black;font-family: 'Montserrat', sans-serif;" align="center"> My Reservations</h2>
    <p>   



<?php
    $conn = mysqli_connect('aries.zoom.ph','crossroa','8-1uk:PZlD41yY','crossroa_crossroads');
        if(mysqli_connect_errno()){
            echo 'Failed to Connect: '.mysqli_connect_error();
        }

        if(isset($_POST['delete']))
        {
            $DeleteQuery = "UPDATE reservation SET status='cancelled' WHERE res_id='$_POST[hidden]'";
            mysqli_query($conn,$DeleteQuery);


                echo "<script type='text/javascript'>alert('Successfully cancelled your reservation!');</script>";
    echo "<script>document.location='profile.php'</script>";
        }


        $query = "SELECT * FROM reservation NATURAL JOIN users WHERE username ='$login_session'";
        $results = mysqli_query($conn,$query);

            echo '<table class="table">
                          <thead>
                            <tr>
                              <th><center>Reservation ID</center></th>
                              <th><center>Customer Name</center></th>
                              <th><center>Email & Phone</center></th>
                              <th><center>Reserved Date & Time</center></th>
                              <th><center>Pax</center></th>
                              <th><center>Current Status </center></th>
                              <th><center>Update Status to </center></th>
                              <th><center>Action</center></th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>';


                    while($userData = mysqli_fetch_array($results)){
                        echo '<form action="profile.php" method="post">';
                            echo '<tr>';
                                echo '<td><center>'.$userData['res_id'].'</center></td>';
                                echo '<td><center>'.$userData['fname'].' '.$userData['lname'].'</center></td>';
                                echo '<td><center>'.$userData['email'].' | '.$userData['contact_no'].'</center></td>';
                                echo '<td><center>'.$userData['res_date'].' from '.$userData['res_time'].'</center></td>';
                                echo '<td><center>'.$userData['pax'].'</center></td>';
                                echo '<td><center>'.$userData['status'].'</center></td>';
                                echo '<td> <input type="text" name="status" value="cancelled" readonly class="form-control"/>
                                <input type="hidden" name="hidden" value="'.$userData['res_id'].'"></td>';
                                echo '<td><input type="submit" name="delete" value="Cancel Reservation" class="btn btn-danger" /  ></td>';
                            echo '</tr>';
                        echo '</form>';
                    }
                    echo '</table>';
    ?>








               
</p>
  </div>

</div>

  </div>
      


<br><br><br>
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
   
   
<script>
  $(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>
<?php include('footer.php');?>  


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <script src="js/style1.js"></script>
  </body>
</html>

