<?php
session_start();
$login_session=$_SESSION['login_user'];

mysql_connect("aries.zoom.ph", "crossroa", "8-1uk:PZlD41yY") or die("Error connecting to database: ".mysql_error());

    mysql_select_db("crossroa_crossroads") or die(mysql_error());
    /* tutorial_search is the name of database we've created */

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

    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>


   
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

  <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>
  <link rel="stylesheet" href="AdminLTE/plugins/datatables/dataTables.style.min.css">
 <link rel="stylesheet" href="css/style1.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

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
    background-color: rgb(231,76,60);; 
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
-moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
border-image: url(img/home/border.png) 19 18 19 20 round repeat;
}

td,tr
{
  color:black;
  font-family: 'Montserrat',sans-serif;
  font-size: 20px;
}

button
{
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;

}

button:hover,
button:focus,
button:active,
button.active,
{
  color: #fff;
  background-color: #d2322d;
  border-color: #ac2925;
}
</style>

<?php include('nav/reserve-nav.php');?>
<body style="background-color: rgb(40,40,40);color:white">



    <br><br>  <br><br>


<br>

    <br><br><br>
    <div class="container">
<h1 style="color:#f1c40f;font-family: 'Teko',sans-serif"><center>CHECK STATUS OF RESERVATION</center></h1>
 <hr style="border-color: rgb(231,76,60);">
</div>
            <div class="col-lg-12">

               <div class="border-img"  style="background-color: #f1c40f;width: 100%">

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
    echo "<script>document.location='reserve.php'</script>";
        }


$search = mysql_real_escape_string($_POST['search']);

        if(isset($_POST['search']))
        {
           
        }

        $query = "SELECT * FROM reservation WHERE fname LIKE '%{$search}%' OR lname LIKE '%{$search}%' OR res_id LIKE '%{$search}%'";
        $results = mysqli_query($conn,$query);

            echo '<table class="table">
                          <thead>
                            <tr>
                              <th><center>Reservation ID</center></th>
                              <th><center>Customer Name</center></th>
                              <th><center>Email & Phone</center></th>
                              <th><center>Reserved Date & Time</center></th>
                              <th><center>Pax</center></th>
                              <th><center>Date Sent</center></th>
                              <th><center>Current Status </center></th>
                              <th><center>Update Status to </center></th>
                              <th><center>Action</center></th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>';


                    while($userData = mysqli_fetch_array($results)){
                        echo '<form action="search.php" method="post">';
                            echo '<tr>';
                                echo '<td><center>'.$userData['res_id'].'</center></td>';
                                echo '<td><center>'.$userData['fname'].' '.$userData['lname'].'</center></td>';
                                echo '<td><center>'.$userData['email'].' | '.$userData['contact_no'].'</center></td>';
                                echo '<td><center>'.$userData['res_date'].' from '.$userData['res_time'].'</center></td>';
                                
                                echo '<td><center>'.$userData['pax'].'</center></td>';
                                 echo '<td><center>'.$userData['sent_date'].'</center></td>';
                                                                
                                echo '<td><center>'.$userData['status'].'</center></td>';
                                echo '<td> <input type="text" name="status" value="cancelled" readonly class="form-control"/>
                                <input type="hidden" name="hidden" value="'.$userData['res_id'].'"></td>';
                                echo '<td><input type="submit" name="delete" value="Cancel Reservation" class="btn btn-danger" /  ></td>';
                            echo '</tr>';
                        echo '</form>';
                    }
                    echo '</table>';
    ?>








               
                </div>
</div>



</body>
</html>
