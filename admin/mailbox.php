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

                                $result1 = mysqli_query($con,'SELECT customer_ID, COUNT(customer_ID) FROM customers'); 
                                $row1 = mysqli_fetch_assoc($result1); 
                                $customer = $row1['COUNT(customer_ID)']; 

                                $result = mysqli_query($con,'SELECT inq_no, COUNT(inq_no) FROM inquiry'); 
                                $row = mysqli_fetch_assoc($result); 
                                $all_inquiry = $row['COUNT(inq_no)']; 


                                $inquiry = "SELECT count(*) as inquiry from inquiry where  status = 'unread'";
                                    $run = mysqli_query($con, $inquiry); 
                                    $row=mysqli_fetch_array($run);
                                    
                                    $inquiries_unread = $row['inquiry'];

                               
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


</head>



<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-inquiries.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mailbox</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Mailbox</li>
              <li class="breadcrumb-item active">Inquiries Page</li>
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
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fa fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right"><?php echo $inquiries_unread;?></span>
                  </a>
                </li>
               
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /. box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inquiries</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td><center>Name</center></td>
                    <td><center>Message</center></td>
                    <td><center>Status</center></td>
                    <td><center>Date</center></td>
                  </tr>
                </thead>
               <tbody>
                     <?php  
                                    include("includes/db.php");
                                    $get_inq = "SELECT * from inquiry";
                                    $run_inq = mysqli_query($con, $get_inq);
                                    $i = 0;

                                    while ($row_inq = mysqli_fetch_array($run_inq)) 
                                    {
                                        $inq_no = $row_inq['inq_no'];
                                        $fname = $row_inq['fname'];
                                        $lname = $row_inq['lname'];
                                        $email = $row_inq['email'];
                                        $contact_no = $row_inq['contact_no'];
                                        $subject = $row_inq['subject'];
                                        $message = $row_inq['message'];
                                        $inq_date = $row_inq['inq_date'];
                                        $status = $row_inq['status'];

                                        if ($status=="read") 
                                        {
                                           $flag="default";
                                         $stat="success fa-eye";
                                        }
                                        

                                        else if($status=="unread")
                                        {
                                          $flag="secondary";
                                        $stat="danger fa-eye-slash";
                                        }
                                        
                                        
                                        $i++;
                                    ?>
                  <tr>
                    
                    <td class="mailbox-name bg-<?php echo $flag?>"><center><a href="read-mail.php?view_inquiry=<?php echo "$inq_no"; ?>"><?php echo $fname?> <?php echo $lname?></a></center></td>
                    <td class="mailbox-subject bg-<?php echo $flag?>"><b><?php echo $subject;?></b> - <?php echo $message?>...
                    </td>
                   <td class="mailbox-attachment bg-<?php echo $flag?>"><center><i class="fa fa-<?php echo $stat;?>"></i></center></td>
                    <td class="mailbox-date bg-<?php echo $flag?>"><center><?php echo $inq_date?></center></td>
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