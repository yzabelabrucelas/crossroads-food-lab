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


$inquiry = "SELECT count(*) as inquiry from inquiry";
$run = mysqli_query($con, $inquiry); 
$row=mysqli_fetch_array($run);
                                    
$all_inquiry = $row['inquiry'];

$inquiry = "SELECT count(*) as inquiry from inquiry where  status = 'unread'";
$run = mysqli_query($con, $inquiry ); 
$row=mysqli_fetch_array($run);
                                    
$inquiries_unread = $row['inquiry'];

$res_ol = "SELECT count(*) as res_ol from reservation";
$run = mysqli_query($con, $res_ol); 
$row=mysqli_fetch_array($run);
                                    
$total_res = $row['res_ol'];


$pending = "SELECT count(*) as pending from reservation where status = 'to be processed'";
$run = mysqli_query($con, $pending); 
$row=mysqli_fetch_array($run);
                                    
$res_pending = $row['pending'];


$confirmed = "SELECT COUNT(*) as confirmed from reservation where status='confirmed'";
$run = mysqli_query($con, $confirmed); 
$row=mysqli_fetch_array($run);               

$res_confirmed = $row['confirmed'];

$cancelled = "SELECT COUNT(*) as cancelled from reservation where status='cancelled'";
$run = mysqli_query($con, $cancelled); 
$row=mysqli_fetch_array($run);               

$res_cancelled = $row['cancelled'];


$finished = "SELECT COUNT(*) as finished from reservation where status='finished'";
$run = mysqli_query($con, $finished); 
$row=mysqli_fetch_array($run);               

$res_finished = $row['finished'];   

                            
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Crossroads Food Lab | Dashboard</title>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!--ICON-->
  <link rel="icon" type="image" href="images/<?php echo"$logo_img" ?>">

  <!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!--ANIMATE-->
  <link rel="stylesheet" href="assets/css/animate.css">

  <link rel="stylesheet" href="AdminLTE/plugins/datatables/dataTables.style.min.css">

   <link rel="stylesheet" href="css/style1.css"/>
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>

<style>
  .bg-warning
  {
background: #FFB75E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #ED8F03, #FFB75E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #ED8F03, #FFB75E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
</style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-dashboard.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><!--container fluid-->
        <!-- Info boxes -->
        <div class="row"> <!--row 1-->


         <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Customers</span>
                <span class="info-box-number"></span>
              </div> /.info-box-content 
            </div>
          </div>-->

        
                           <div class="col-lg-4 col-4">
           
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $res_pending;?></h3>

                <p style="font-family: 'Montserrat', sans-serif;color: white;font-size: 20px">Total Pending Online Reservations</p>
              </div>
              <div class="icon">
                <i class="fa fa-calendar"></i>
              </div>
              <a href="tobeprocessed.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
                    <div class="col-lg-4 col-4">
           
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $inquiries_unread;?></h3>

                <p style="font-family: 'Montserrat', sans-serif;color: white;font-size: 20px">Unread Inquiries</p>
              </div>
              <div class="icon">
                <i class="fa fa-calendar"></i>
              </div>
              <a href="mailbox.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <div class="col-lg-4 col-4">
           
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $res_confirmed;?></h3>

                <p style="font-family: 'Montserrat', sans-serif;color: white;font-size: 20px">Total Confirmed Online Reservations</p>
              </div>
              <div class="icon">
                <i class="fa fa-calendar"></i>
              </div>
              <a href="confirmed.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          
        </div><!--/.row 1-->



        </div><!--/.container fluid-->
      </section><!-- /.Content Wrapper. Contains page content -->
      </div>
<?php include("includes/footer.php");?>
</div><!-- ./wrapper -->


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

</body>
</html>
