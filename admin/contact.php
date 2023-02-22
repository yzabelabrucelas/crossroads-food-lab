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

    <link rel="stylesheet" href="css/style1.css" />
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="admin/assets/css/hover.css" />

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>


</head>



<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main Sidebar Container-->
        <?php include("sidebar/side-contact.php");?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Contact Us Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item">Content Management</li>
                                <li class="breadcrumb-item active">Contact Us</li>
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
                    <div class="card col-md-5">
                        <!--card col-->
                        <div class="card-header">
                            <!--card header-->
                            <h3 class="card-title">Company Address</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!--/.card header-->

                        <!--LOGO-->
                        <div class="card-body" align="center">
                            <form action="" method="post" enctype="multipart/form-data">
                                <center>
                                    <?php  
include("includes/db.php");
                                $get_contact = "select * from contact_info";
                                $run_contact = mysqli_query($con, $get_contact);
                                $row_contact = mysqli_fetch_array($run_contact);
                                          

                                $contact_address = $row_contact['contact_address'];
                                $contact_id = $row_contact['id'];
?>


                                    <textarea class="form-control" rows="2" style="height: 100px" cols="50"
                                        name="contact_address" style="margin-bottom:20px,width: 100%">

                    <?php echo "$contact_address"; ?>
                    </textarea>

                                    <button class="btn btn-info animated infinite rubberBand" type="submit"
                                        name="update_address" value="update
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span>
                                    </button>
                                </center>
                                <?php
                                    if (isset($_POST['update_address'])) 
                                    {
                                        $update_id = $contact_id;
                                        $contact_address = $_POST['contact_address'];
 

                                        $update_contact = "UPDATE contact_info SET contact_address='$contact_address' WHERE id='$update_id'"; 
                                        $update_cont = mysqli_query($con, $update_contact);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('contact.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error:'.mysql_error());
                                        }
                                    };     
                                    ?>
                            </form>
                        </div>

                    </div>
                    <!--card col-->
                </center> <!-- END OF LOGO CONTENT-->




                <!--########################## EMAIL/CONTACT NUM CONTENT-->
                <center>
                    <!-- Default box -->
                    <div class="card col-md-5">
                        <!--card col-->
                        <div class="card-header">
                            <!--card header-->
                            <h3 class="card-title">Company Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!--/.card header-->

                        <!--LOGO-->
                        <div class="card-body" align="center">
                            <form action="" method="post" enctype="multipart/form-data">
                                <center>
                                    <?php  
include("includes/db.php");
                                $get_contact = "SELECT * from contact_info";
                                $run_contact = mysqli_query($con, $get_contact);
                                $row_contact = mysqli_fetch_array($run_contact);
                                            
                                $contact_no = $row_contact['contact_no'];
                                $contact_email = $row_contact['contact_email'];
                                $contact_id = $row_contact['id'];
?>

                                    <small>Contact Number</small>
                                    <textarea class="form-control" rows="2" cols="50" style="height: 100px"
                                        name="contact_no" style="margin-bottom:20px,width: 100%">

                <?php echo "$contact_no"; ?>
                    </textarea>
                                    <br>

                                    <small>Email Address</small>
                                    <textarea class="form-control" rows="2" cols="50" name="contact_email"
                                        style="margin-bottom:20px,width: 100%">

                    <?php echo "$contact_email"; ?>
                    </textarea>

                                    <button class="btn btn-info animated infinite rubberBand" type="submit"
                                        name="update_details" value="update
" style="margin:20px; font-size:25px;"> <span style="margin-bottom:5px;" class="fa fa-upload"></span>
                                    </button>
                                </center>
                                <?php
                          if (isset($_POST['update_details'])) 
                                    {
                                        $update_id = $contact_id;
                                        $contact_no = $_POST['contact_no'];
                                        $contact_email = $_POST['contact_email'];   

                                        $update_contact = "UPDATE contact_info set contact_no='$contact_no', contact_email='$contact_email' where id='$update_id'"; 
                                        $update_cont = mysqli_query($con, $update_contact);

                                        if ($update_cont) 
                                        {
                                            echo "<script> alert ('Updated Successfully!')</script>";
                                            echo "<script> window.open('contact.php','_self')</script>";
                                        }  

                                        else
                                        {
                                            die('Error:'.mysql_error());
                                        }
                                    };     
                                    ?>
                            </form>
                        </div>

                    </div>
                    <!--card col-->
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

    <!-- CK Editor -->
    <script src="AdminLTE/plugins/ckeditor/ckeditor.js"></script>


</body>

</html>