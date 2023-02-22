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


$total_res = "SELECT count(*) as total_res from reservation";
$run = mysqli_query($con, $total_res); 
$row=mysqli_fetch_array($run);
                                    
$total_res = $row['total_res'];

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
  <title>Crossroads Food Lab</title>

    <link rel="icon" type="image" href="images/<?php echo"$logo_img" ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--ANIMATE-->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="AdminLTE/plugins/datatables/dataTables.style.min.css">

   <link rel="stylesheet" href="css/style1.css"/>
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>

<style style="text/css">
    .hoverTable{
    width:100%; 
    border-collapse:collapse; 
  }
  .hoverTable td{ 
    padding:7px; border:gray 1px solid;
  }
  /* Define the default color for all the table rows */
  .hoverTable tr{
background: #cfd8dc;
  }
  /* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: #ffbb33;
    }
</style>
</head>



<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-reservation_confirmed.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Confirmed Online Reservations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Reservation</li>
              <li class="breadcrumb-item active">Confirmed Online Reservations</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->

  <!-- Main content -->
    <section class="content">


<div class="row">
        <div class="col-md-3">

  <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Reservations</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fa fa-calendar"></i> Online Reservations
                    <span class="badge bg-primary float-right"><?php echo $total_res;?></span>
                  </a>
                </li>
               
              </ul>
            </div>
            <!-- /.card-body -->
</div>
                      <!-- /. box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Legend</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">

                 <li class="nav-item">
                  <a href="finished.php" class="nav-link text-success">
                    <i class="fa fa-circle-o text-success"></i> Finished
                     <span class="badge bg-primary float-right"><?php echo $res_finished;?></span> 
                  </a>
                </li>

                <li class="nav-item">
                  <a href="cancelled.php" class="nav-link text-danger">
                    <i class="fa fa-circle-o text-danger"></i>
                    Cancelled
                    <span class="badge bg-primary float-right"><?php echo $res_cancelled;?></span> 
                  </a>
                </li>

                <li class="nav-item">
                  <a href="confirmed.php" class="nav-link text-warning">
                    <i class="fa fa-circle-o text-warning"></i> Confirmed
                    <span class="badge bg-primary float-right"><?php echo $res_confirmed;?></span> 
                  </a>
                </li>

                <li class="nav-item">
                  <a href="tobeprocessed.php" class="nav-link text-secondary">
                    <i class="fa fa-circle-o text-secondary"></i>
                    To be Processed<span class="badge bg-primary float-right"><?php echo $res_pending;?></span> 
                  </a>
                </li>


              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          <!-- /. box -->

        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Online Reservations</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered hoverTable">
                <thead>
                  <tr>
                        <td><center>Reservation ID</center></td>
                        <td><center>Name</center></td>
                    <td><center>Date and Time Reserved</center></td>
                    <td><center>Status</center></td>
                    <td><center>Date Sent</center></td>
                  </tr>
                </thead>
               <tbody>
                     <?php  
                                    include("includes/db.php");
                                    $get = "SELECT * from reservation WHERE status='confirmed' ORDER BY sent_date ASC";
                                    $run = mysqli_query($con, $get);
                                    $i = 0;

                                    while ($row = mysqli_fetch_array($run)) 
                                    {
                                         $res_id=$row['res_id'];
                                         $fname=$row['fname'];
                                        $lname=$row['lname'];
                                          $email=$row['email'];
                                        $contact_no=$row['contact_no'];
                                             $pax=$row['pax'];
                                       $res_date = $row['res_date'];
                                   $res_time=$row['res_time'];
                                    $status=$row['status'];
                              $sent_date=$row['sent_date'];

                                        if ($status=="confirmed") 
                                        {
                                           $flag="warning";
                                         $stat="warning fa-check-circle-o";
                                        }
                                        

                                        else if($status=="to be processed")
                                        {
                                          $flag="secondary";
                                        $stat="secondary fa-spinner";
                                        }
                                        
                                        else if($status=="cancel")
                                        {
                                          $flag="danger";
                                        $stat="danger fa-times";
                                        }
                                        
                                        else if($status=="finished")
                                        {
                                          $flag="success";
                                        $stat="success fa-check";
                                        }



                                        
                                        $i++;
                                    ?>
                  <tr>
                    
                    <td><center><a href="read-reservation_confirmed.php?view_reservation=<?php echo "$res_id";?>"><?php echo $res_id;?></a></center></td>
                    
                    
                    <td><center><?php echo $fname;?> <?php echo $lname?>
                    </center></td>
                    
                    <td><center><?php echo $res_date;?> from <?php echo $res_time?>
                    </center></td>
                    
                   <td><center><?php echo $status;?></center></td>
                   
                    <td><center><?php echo $sent_date;?></center></td>
                    
                  </tr>
               

                   <?php } ?>
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

</section>
    <!-- /.content -->
  </div>
</div><!-- /.Content Wrapper. Contains page content -->
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

    

   <!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>