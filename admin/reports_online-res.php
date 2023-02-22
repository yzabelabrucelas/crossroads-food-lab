<?php
session_start();    

if (!isset($_SESSION['user_email'])) 
    {
        echo "<script> alert ('You are not an admin, Please log in first!')</script>";
        echo "<script>window.open('admin_login.php','_self')</script>";
    }
    else{
        
    }

     global $con;

                                include("includes/db.php");
                                
                                  $get_logo = "select * from logo";
                                  $run_logo = mysqli_query($con, $get_logo);
                                  $row_logo = mysqli_fetch_array($run_logo);
                                            
                                  $logo_ID = $row_logo['id'];
                                  $logo_img = $row_logo['logo'];
    ?>


    <?php
  $conn = mysqli_connect("aries.zoom.ph", "crossroa", "8-1uk:PZlD41yY", "crossroa_crossroads");
  
  $post_at = "";
  $post_at_to_date = "";
  
  $queryCondition = "";
  if(!empty($_POST["res_date"]["post_at"])) {     
    $post_at = $_POST["res_date"]["post_at"];
    list($fid,$fim,$fiy) = explode("-",$post_at);
    
    $post_at_todate = date('Y-m-d');
    if(!empty($_POST["res_date"]["post_at_to_date"])) {
      $post_at_to_date = $_POST["res_date"]["post_at_to_date"];
      list($tid,$tim,$tiy) = explode("-",$_POST["res_date"]["post_at_to_date"]);
      $post_at_todate = "$tiy-$tim-$tid";
    }
    
    $queryCondition .= "WHERE res_date BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
  }

  $sql = "SELECT * from reservation " . $queryCondition . " ORDER BY res_date";
  $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Crossroads Food Lab</title>
  <head>
<link rel="icon" type="image" href="images/<?php echo"$logo_img" ?>">



  <!--ANIMATE-->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="AdminLTE/plugins/datatables/dataTables.style.min.css">


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>



  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>


<body class="hold-transition sidebar-mini">
    
<div class="wrapper"><!--wrapper-->

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-reports_online-res.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      <div class="col-sm-6">
            <h1 class="m-0 text-dark">Online Reservation Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Reports</li>
              <li class="breadcrumb-item active">Online Reservations</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->

  <!-- Main content -->
    <section class="content">



<br>


<br>

</center>
 <form name="frmSearch" method="post" action="">
   <p class="search_input">
   <center> 
<label>From:</label>
    <input type="text" placeholder="From Date" id="post_at" name="res_date[post_at]"  value="<?php echo $post_at; ?>" class="input-control" />

<label>To:</label>
    <input type="text" placeholder="To Date" id="post_at_to_date" name="res_date[post_at_to_date]" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>" class="input-control"/>
<br>
<input type="submit" name="go" value="Search" class="btn btn-success btn-lg"> <input type="button" class="btn btn-info btn-lg" value="Print Records" onclick="javascript:printDiv('printablediv')" />
  </p>



  <div id="printablediv">
      <h5 style="float:left"><b>From:</b> <?php echo $post_at; ?> <b>To:</b> <?php echo $post_at_to_date; ?> </h5>
<center>
<img src="images/<?php echo"$logo_img" ?>" width="150" height="150"  style="margin-left: 90px"/></center>
<br>
<center>
<strong style="font-size: 25px">Crossroads Food Lab</strong>
<br>
KM19 Aguinaldo Highway Brgy Panapaan VI, 4102 Bacoor, Cavite
<p>09157907161</p>
<br>
<center><h2>ONLINE RESERVATION REPORTS</h2></center>
<?php if(!empty($result))  { ?>
 <table id="example" class="display table table-bordered table-striped" style="width:100%">
          <thead>
        <tr>
                      
          <th><center>Reservation ID</center></th>
          <th><center>Customer Name</center></th>          
          <th><center>Phone & Email</center></th>
          <th><center>Reserved Date & Time</center></th>
          <th><center>Pax</center></th>
              <th><center>Date Sent</center></th>  
             <th><center>Status</center></th>     
                   
        </tr>
      </thead>
    <tbody>
  <?php
    while($row = mysqli_fetch_array($result)) {
  ?>
        <tr>
      <td><center><?php echo $row["res_id"]; ?></center></td>
      <td><center><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></center></td>
            <td><center><?php echo $row["contact_no"]; ?> | <?php echo $row["email"]; ?></center></td>
      <td><center><?php echo $row["res_date"]; ?> from <?php echo $row["res_time"]; ?></center></td>
            <td><center><?php echo $row["pax"]; ?></center></td>
      <td><center><?php echo $row["sent_date"]; ?></center></td>
       <td><center><?php echo $row["status"]; ?></center></td>     

    </tr>
   <?php
    }
   ?>

  </table>
<?php } ?>
              <br><br><br>
<h5 style="float:left">Prepared By: <?php echo $_SESSION['user_email'];?></h5>
</div>

</form>
</section>
    <!-- /.content -->


  </div><!-- /.Content Wrapper. Contains page content -->
</div><!--./wrapper-->
<?php include("includes/footer.php");?>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>

<script src="AdminLTE/plugins/style/js/style.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="AdminLTE/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="AdminLTE/plugins/datatables/dataTables.style.min.js"></script>

<!-- jVectorMap -->
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>


<!-- PAGE SCRIPTS -->
<script src="AdminLTE/dist/js/pages/dashboard2.js"></script>

<!-- CK Editor -->
<script src="AdminLTE/plugins/ckeditor/ckeditor.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "images/datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'dd-mm-yy'  
});
$(function() {
$("#post_at").datepicker();
$("#post_at_to_date").datepicker();
});
</script>

    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title>Online Reservation Reports</title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>

</body>
</html>