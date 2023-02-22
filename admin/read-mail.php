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
  <?php include("sidebar/side-inquiries.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Read Inquiry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Inquiry</li>
              <li class="breadcrumb-item active">Read Mail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="mailbox.php" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

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
                  <li class="nav-item">
                    <a href="mailbox.html" class="nav-link">
                      <i class="fa fa-inbox"></i> Inbox
                      <span class="badge bg-primary float-right"><?php echo $inquiries;?></span>
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
            <div class="card-header">
              <h3 class="card-title">Read Mail</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                    <?php  
                                    include("includes/db.php");
                                    if (isset($_GET['view_inquiry'])) {

                                    $inq_no = $_GET['view_inquiry'];
                                    $get_inq = "select * from inquiry where inq_no = '$inq_no'";
                                    $run_inq = mysqli_query($con, $get_inq);
                                    $up = "update inquiry set status='read' where inq_no='$inq_no'";
                                    $run_up = mysqli_query($con, $up);
                                    
                                    while ($row_inq = mysqli_fetch_array($run_inq)) 
                                    {
                                        $inq_ID = $row_inq['inq_no'];
                                        $fname = $row_inq['fname'];
                                        $lname = $row_inq['lname'];
                                        $inq_email = $row_inq['email'];
                                        $contact_no = $row_inq['contact_no'];
                                        $inq_message = $row_inq['message'];
                                        $inq_subject = $row_inq['subject'];
                                        $inq_date = $row_inq['inq_date'];
                                    ?>
                <h5><b><?php echo $inq_subject; ?></b></h5>
                <small>From: <?php echo $fname; ?> <?php echo $lname; ?>
                  <span class="mailbox-read-time float-right"><?php echo $inq_date; ?></span></small>
              </div>
              <!-- /.mailbox-read-info -->

              <div class="mailbox-read-message">
                  <?php echo $inq_message;?>
                  <?php }}  ?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->


            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" href="#replyModal"><i class="fa fa-reply"></i> Reply</button>
               </div>

              <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" href="#deleteModal">
                <i class="fa fa-trash-o"></i>
              </button>

            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    <!-- /.content -->
  </div>
</section>
  </div>
</div><!-- /.Content Wrapper. Contains page content -->



<!--MODAL-->

<!-- REPLY Modal -->
<div id="replyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Reply Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
  <form method="post" action="send-mail.php">
            <div class="form-group">
              <label for="name">Sender Name</label>
              <input type="text" maxlength="20" class="form-control" id="name" placeholder="Name" name="name" value="Crossroads Food Lab." disabled>
            </div>
            <div class="form-group">
              <label for="number">Contact Number</label>
<input type="text" maxlength="11" class="form-control" id="number" value="<?php echo $contact_no?>" name="contact_no" >

            </div>

                        <div class="form-group">
              <label for="number">Email</label>
<input type="text" class="form-control" value="<?php echo $inq_email?>" name="email" >

            </div>

                        <div class="form-group">
              <label for="msg">Subject</label>
                 <input type="text" class="form-control" rows="3" name="subject" required value="RE: <?php echo $inq_subject?>">
            </div> 

            <div class="form-group">
              <label for="msg">Your Message</label>
              <textarea id="editor1" class="form-control" rows="3" name="message" placeholder="Message Here" onkeyup="countChar(this)" required>
                  Dear <?php echo $fname; ?> <?php echo $lname; ?>,
                  <p></p><p></p><p></p>
                  <i>Copyright &copy; Crossroads Food Lab. All rights reserved.</i>
                <br> You are receiving this email because you inquired via our website. Please do not reply.</textarea>
            </div>
              <button type="submit" class="btn btn-success">Send</button> 
          </form>

      </div>

    </div>

  </div>
</div>
<!--END REPLY MODAL-->



<!-- DELETE Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Delete Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
                      <form class="form-horizontal" method="post">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $inq_ID;?>">
                  <div style="font-size: 15px" class="alert alert-warning">
                      Are you sure you want to delete the message from <ins><?php echo $fname; ?> <?php echo $lname; ?></ins>?. It will be move to Archives Inquiry.
                    </div>                     
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <center>
                       <a class="btn btn-danger btn-lg" href="delete_inq.php?delete_inq=<?php echo "$inq_ID"; ?>"> <i class="fa fa-trash-o"></i></a>
                      </center>
                  </div>
              </form>
              <!--end form-->

      </div>

    </div>

  </div>
</div>
<!--END DELETE MODAL-->



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

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

  })
</script>

</body>
</html>