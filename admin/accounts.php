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
                                    $run = mysqli_query($con, $inquiry ); 
                                    $row=mysqli_fetch_array($run);
                                    
                                    $inquiries = $row['inquiry'];                 


                               
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

<div class="wrapper"><!--wrapper-->

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-settings_acc.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Settings</li>
              <li class="breadcrumb-item active">User Accounts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->

  <!-- Main content -->
    <section class="content">


<div class="panel panel-default">
    <div class="panel-heading">

        <!-- Trigger the modal with a button -->
<button type="button" style="float:right; margin-bottom:20px;"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#addModal">Add New User</button>

<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
          <!--start form-->
              <form class="form-horizontal" method="post" action="accounts_save.php" enctype='multipart/form-data'>

                    <div class="form-group">
                      <div class="col-lg-12"> 
                     <input type="text" class="form-control" name="user_email" placeholder="Username" required>
                      </div>
                  </div> 

                      <div class="form-group">
                      <div class="col-lg-12"> 
                     <input type="password" class="form-control" name="user_pass" placeholder="Password" required>
                      </div>
                  </div> 
                      

                <center>
                  <div class="form-group">
                        <button style="font-size: 20px" type="submit" class="btn btn-sm btn-primary">Save</button>    
                </div>
                </center>

              </form><!--../form-->
      </div><!--../model body-->

    </div><!--../model content-->

  </div><!--../modal dialog-->
</div><!--../modal-->

    </div><!--../div panel heading-->

    <div class="panel-body">
    <div class="table-responsive">
<table id="example1" class="table table-bordered table-hover table-striped">
  <thead>
                                        <tr>
                                            <th><center>Username</center></th>
                                            <th><center>Action</center></th>
                                            
                    
                                        </tr>
</thead>

 <tbody>

<?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from admin")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $user_ID=$row['user_ID'];
        $user_email=$row['user_email'];

?>


                      <tr>
                    
            <td style="font-size: 20px"><center><?php echo $user_email;?></center></td>
                        <td><center>            

                      <a href="#updateModal" class="btn btn-info btn-lg" data-target="#updateModal<?php echo $user_ID;?>" data-toggle="modal"> <i class="fa fa-edit"></i></a>   
                       <a href="#deleteModal" class="btn btn-danger btn-lg" data-target="#deleteModal<?php echo $user_ID;?>" data-toggle="modal"> <i class="fa fa-trash-o"></i></a>  
         

                        </center></td>
                        </tr>
<!-- Modal -->
<div id="updateModal<?php echo $user_ID;?>" id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update User Account</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <!--start form-->
              <form class="form-horizontal" method="post" action="accounts_update.php" enctype='multipart/form-data'>
  <!-- Title -->
<input type="hidden" name="user_ID" value="<?php echo $user_ID;?>">

                  <!-- Title -->
                  <div class="form-group">
<div class="col-lg-12"> 
<input type="text" class="form-control" name="user_email"  placeholder="Username" value="<?php echo $user_email;?>">
</div>
</div> 

                  <!-- Title -->
                  <div class="form-group">
<div class="col-lg-12"> 
<input type="password" class="form-control" name="user_pass" value="<?php echo $user_pass;?>">
</div>
</div> 


                    <center>
                  <div class="form-group">
                        <button style="font-size: 20px" type="submit" name="update" class="btn btn-sm btn-primary">Save</button>    
                </div>
                </center>

                </form>
      </div>

    </div>

  </div>
</div><!-- Update Modal -->



<div id="deleteModal<?php echo $user_ID;?>"  class="modal fade" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
                      <!--start form-->
              <form class="form-horizontal" method="post">
                  <input type="hidden" class="form-control" name="user_ID" value="<?php echo $user_ID;?>">

                  <div style="font-size: 15px" class="alert alert-warning">
                      Are you sure you want to delete the user?
                    </div>                     
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <center>
                        <button type="submit" class="btn btn-lg btn-danger" name="del"><i class="fa fa-trash-o"></i></button>
                      </center>
                  </div>
              </form>
      </div>
    </div>

  </div>
</div><!--DELETE MODAL-->


<?php } ?>
</tbody>
</table>
    </div><!--../table responsive-->
    </div><!--../panel body-->
</div><!--../div panel-->




</section>
    <!-- /.content -->


  </div><!-- /.Content Wrapper. Contains page content -->
</div><!--./wrapper-->
<?php include("includes/footer.php");?>
<?php
    if (isset($_POST['del']))
    {
    $user_ID=$_POST['user_ID'];

  // sending query
  mysqli_query($con,"DELETE FROM admin WHERE user_ID='$user_ID'")
  or die(mysqli_error());
  echo "<script>document.location='accounts.php'</script>";
    }
    ?>

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

<!-- SparkLine -->
<script src="AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="AdminLTE/plugins/chartjs-old/Chart.min.js"></script>

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