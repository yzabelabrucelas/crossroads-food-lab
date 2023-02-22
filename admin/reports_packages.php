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

   <link rel="stylesheet" href="css/style1.css"/>
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
</head>


<body class="hold-transition sidebar-mini">
    
<div class="wrapper"><!--wrapper-->

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-reports_packages.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      <div class="col-sm-6">
            <h1 class="m-0 text-dark">Package Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Reports</li>
              <li class="breadcrumb-item active">Packages</li>
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
<center>
<img src="images/<?php echo"$logo_img" ?>" width="150" height="150"  style="margin-left: 90px"/></center>
<br>
<center>
<strong style="font-size: 25px">Crossroads Food Lab</strong>
<br>
KM19 Aguinaldo Highway Brgy Panapaan VI, 4102 Bacoor, Cavite
<p>09157907161</p>
<br>
</center>
 <table id="example" class="display table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <td><center>Package ID</center></td>
                    <td><center>Package Title</center></td>
                    <td><center>Package Price</center></td>
                    <td><center>Description</center></td>

                  </tr>
                </thead>
               <tbody>
                     <?php  
                                    include("includes/db.php");
                                    $get_inq = "SELECT * from package";
                                    $run_inq = mysqli_query($con, $get_inq);
                                    $i = 0;

                                    while ($row_inq = mysqli_fetch_array($run_inq)) 
                                    {
                                        $package_ID = $row_inq['package_ID'];
                                        $package_title = $row_inq['package_title'];
                                        $package_price = $row_inq['package_price'];
                                        $package_desc = $row_inq['package_desc'];
                                        $i++;
                                    ?>
                  <tr>
                    
                    <td><center><?php echo $package_ID;?></center></td>
                    <td><center><?php echo $package_title;?></center></td>
                    <td><center><?php echo $package_price;?></center></td>
                    <td><center><?php echo $package_desc;?></center></td>
                  </tr>
               

                   <?php } ?>
                  </tbody>
              </table>
</section>
    <!-- /.content -->


  </div><!-- /.Content Wrapper. Contains page content -->
</div><!--./wrapper-->
<?php include("includes/footer.php");?>
<!-- REQUIRED SCRIPTS -->

<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>

<script src="AdminLTE/plugins/style/js/style.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="AdminLTE/dist/js/demo.js"></script>

<!-- jVectorMap -->
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>


<!-- PAGE SCRIPTS -->
<script src="AdminLTE/dist/js/pages/dashboard2.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
    } );
} );
</script>


</body>
</html>