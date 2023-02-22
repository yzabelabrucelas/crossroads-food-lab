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
<div class="wrapper">

  <!-- Main Sidebar Container-->
  <?php include("sidebar/side-about.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Content Management</li>
              <li class="breadcrumb-item active">About Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->

  <!-- Main content -->
    <section class="content">



<!--########################## ADDRESS CONTENT-->
<center>
      <!-- Default box -->
      <div class="card col-md-9"> <!--card col-->
        <div class="card-header"><!--card header-->
            <h3 class="card-title">Core Values</h3>
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

                                $get_cv = "select * from about_us";
                                $run_cv = mysqli_query($con, $get_cv);
                                $row_cv = mysqli_fetch_array($run_cv);
                                          

                                $core_values = $row_cv['core_values'];
?>


                  <textarea class="form-control" id="editor1" rows="10" cols="80"  style="height: 100px" name="core_values" style="margin-bottom:20px,width: 100%">

                    <?php echo "$core_values"; ?>
                    </textarea>
                
<button  class="btn btn-info animated infinite rubberBand" type="submit" name="update_cv" value="Update CV
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span> 
</button>
</center>
                                      <?php
                                    if (isset($_POST['update_cv'])) 
                                    {
                                       
                                        $core_values = $_POST['core_values'];
 

                                        $update_cv = "UPDATE about_us SET core_values='$core_values'"; 
                                        $update_cont = mysqli_query($con, $update_cv);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('about.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error:'.mysql_error());
                                        }
                                    };     
                                    ?>
</form>                                                                  
</div>

</div>  <!--card col-->                                    
</center> <!-- END OF LOGO CONTENT-->




<!--########################## MISSION CONTENT-->
<center>
      <!-- Default box -->
      <div class="card col-md-9"> <!--card col-->
        <div class="card-header"><!--card header-->
            <h3 class="card-title">Mission</h3>
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
                                $get_mission = "SELECT * from about_us";
                                $run_mission = mysqli_query($con, $get_mission);
                                $row_mission = mysqli_fetch_array($run_mission);
                                          

                                $mission = $row_mission['mission'];
?>

               <textarea class="form-control" id="editor2" rows="10" cols="80" style="height: 100px" name="mission" style="margin-bottom:20px,width: 100%">

                    <?php echo "$mission"; ?>
                    </textarea>
                
<button  class="btn btn-info animated infinite rubberBand" type="submit" name="update_mission" value="Update Mission
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span> 
</button>
</center>
                                      <?php
                                    if (isset($_POST['update_mission'])) 
                                    {
                                       
                                        $mission = $_POST['mission'];
 

                                        $update_mission = "UPDATE about_us SET mission='$mission'"; 
                                        $update_cont = mysqli_query($con, $update_mission);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('about.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error:'.mysql_error());
                                        }
                                    };     
                                    ?>
</form>                                                             
</div>

</div>  <!--card col-->                                    
</center> <!-- END OF EMAIL CONTACT NUMBER-->


  

<!--########################## VISION CONTENT-->
<center>
      <!-- Default box -->
      <div class="card col-md-9"> <!--card col-->
        <div class="card-header"><!--card header-->
            <h3 class="card-title">Vision</h3>
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
                                $get_vision = "SELECT * from about_us";
                                $run_vision = mysqli_query($con, $get_vision);
                                $row_vision = mysqli_fetch_array($run_vision);
                                          

                                $vision = $row_vision['vision'];
?>

            <textarea class="form-control" id="editor3" rows="10" cols="80"  style="height: 200px" name="vision" style="margin-bottom:20px,width: 100%">

                    <?php echo "$vision"; ?>
                    </textarea>
                
<button  class="btn btn-info animated infinite rubberBand" type="submit" name="update_vision" value="Update Vision
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span> 
</button>
</center>
                                      <?php
                                    if (isset($_POST['update_vision'])) 
                                    {
                                       
                                        $vision = $_POST['vision'];
 

                                        $update_vision = "UPDATE about_us SET vision='$vision'"; 
                                        $update_cont = mysqli_query($con, $update_vision);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('about.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error: Vision not updated!'.mysql_error());
                                        }
                                    };     
                                    ?>
</form>                                                                    
</div>

</div>  <!--card col-->                                    
</center> <!-- END OF EMAIL CONTACT NUMBER-->


    
<!--########################## HISTORY CONTENT-->
<center>
      <!-- Default box -->
      <div class="card col-md-9"> <!--card col-->
        <div class="card-header"><!--card header-->
            <h3 class="card-title">HISTORY</h3>
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
                                $get_history = "select * from about_us";
                                $run_history = mysqli_query($con, $get_history);
                                $row_history = mysqli_fetch_array($run_history);
                                          

                                $history = $row_history['history'];

?>

    <textarea class="form-control" id="editor4" rows="10" cols="80" style="height: 200px" name="history" style="margin-bottom:20px,width: 100%">

                    <?php echo "$history"; ?>
                    </textarea>
                
<button  class="btn btn-info animated infinite rubberBand" type="submit" name="update_history" value="Update History
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span> 
</button>
</center>
                                      <?php
                                    if (isset($_POST['update_history'])) 
                                    {
                                       
                                        $history = $_POST['history'];
 

                                        $update_history = "UPDATE about_us SET history='$history'"; 
                                        $update_cont = mysqli_query($con, $update_history);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('about.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error:'.mysql_error());
                                        }
                                    };     
                                    ?>
</form>                                                                            
</div>

</div>  <!--card col-->                                    
</center> <!-- END OF EMAIL CONTACT NUMBER-->







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

<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
 <script>
CKEDITOR.replace( 'editor1' );
</script>
 <script>
CKEDITOR.replace( 'editor2' );
</script>
 <script>
CKEDITOR.replace( 'editor3' );
</script>
 <script>
CKEDITOR.replace( 'editor4' );
</script>


</body>
</html>