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
  
  <!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="js/parallax.js"></script>
    <script src="js/style1.js"></script>

    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>
 <link rel="stylesheet" href="css/style1.css"/>
    

</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-home_pics.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Content Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Content Management</li>
              <li class="breadcrumb-item active">Home Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->

  <!-- Main content -->
    <section class="content">



<!--##########################LOGO CONTENT-->
<center>
      <!-- Default box -->
      <div class="card col-md-5"> <!--card col-->
        <div class="card-header"><!--card header-->
            <h3 class="card-title">Company Logo</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
            </div>
        </div><!--/.card header-->

        <!--LOGO-->
<div class="card-body"  align="center">            
<form action="" method="post" enctype="multipart/form-data">
<center>
<?php  
include("includes/db.php");
$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];
?>

<img src="images/<?php echo $logo_img;?>" width="200" height="200">
<br>
<input type="file" name="logo" size="20" required/>
<br>
<button  class="btn btn-info animated infinite rubberBand" type="submit" name="update_logo" value="Update Logo" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span> 
</button>
</center>

 <?php
global $con;
if (isset($_POST['update_logo'])) 
{
$update_id = $logo_ID;
$logo = $_FILES['logo']['name'];
$logo_tmp = $_FILES['logo']['tmp_name'];
move_uploaded_file($logo_tmp,"images/$logo");
$update_logo = "update logo set logo='$logo' where id='$update_id'"; 
$update_log = mysqli_query($con, $update_logo);

if ($update_log) 
{
echo "<script> alert ('Updated Successfully!')</script>";
echo "<script> window.open('home_pictures.php','_self')</script>";
}  
else
{
die('Error: photo not uploaded!'.mysql_error());
}
}                       
?>
</form>                                                     
</div>

<div class="card-footer">
<h5><b>Note:</b> picture must be 100x100</h5>
</div>

</div>  <!--card col-->                                    
</center> <!-- END OF LOGO CONTENT-->


<!--################### SLIDERS -->
<center>
      <!-- Default box -->
      <div class="card col-md-11">
        <div class="card-header">
          <h3 class="card-title">Sliders</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <!--SLIDER-->
        <br>
                <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg col-md-6" data-toggle="modal" data-target="#addModal">Add Photo Slider</button>

<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Add Photo Slider</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
          <!--start form-->
              <form class="form-horizontal" method="post" action="slider_save.php" enctype='multipart/form-data'>


                    <div class="form-group">
                      <div class="col-lg-12"> 
                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                      </div>
                  </div> 

                                      <div class="form-group">
                      <div class="col-lg-12"> 
                       <input type="file" class="form-control" name="image">
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
        <div class="card-body"  align="center">
                                                 
<div class="container">

  <div class="row">

   <table id="example1" class="table table-bordered table-hover table-striped">
  <thead>
                                        <tr>
                                            <th><center>Picture</center></th>
                                            <th><center>Title</center></th>
                                            <th><center>Action</center></th>
                                            
                    
                                        </tr>
</thead>

 <tbody>

<?php
include('includes/db.php');

    $query=mysqli_query($con,"SELECT * from slider")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['id'];
        $title=$row['title'];
        $slider=$row['slider'];

?>


                      <tr>
                        <td><center><img style="height:100px;width:150px" src="images/slider/<?php echo $slider;?>"></center></td>
                        <td style="font-size: 20px"><center><?php echo $title;?></center></td>
                        <td><center>
                      <a href="#updateModal" class="btn btn-info btn-lg" data-target="#updateModal<?php echo $id;?>" data-toggle="modal"> <i class="fa fa-edit"></i></a>              


                        </center></td>
                        </tr>
<!-- Modal -->
<div id="updateModal<?php echo $id;?>" id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog" class="col-lg-12">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Photo Slider</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <!--start form-->
              <form class="form-horizontal" method="post" action="slider_update.php" enctype='multipart/form-data'>
  <!-- Title -->
<input type="hidden" name="id" value="<?php echo $id;?>">


                  <!-- Title -->
                  <div class="form-group">
<div class="col-lg-12"> 
<input type="text" class="form-control" name="title"  placeholder="Title" value="<?php echo $title;?>">
</div>
</div> 



                  <!-- Title -->
                  <div class="form-group">
<div class="col-lg-12"> 
<input type="hidden" class="form-control" id="image" name="image1" value="<?php echo $slider;?>"> 
<input type="file" class="form-control" name="image" id="title">
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


<?php } ?>
</tbody>
</table>

  </div>

</div>
<div class="card-footer">
<h5><b>Note:</b> Maximum of 5 photos only.</h5>
</div>

</center>
<!-- END OF SLIDER CONTENT-->



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

<!-- CK Editor -->
<script src="AdminLTE/plugins/ckeditor/ckeditor.js"></script>

</body>
</html>