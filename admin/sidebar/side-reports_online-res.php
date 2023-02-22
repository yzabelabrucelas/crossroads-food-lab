<?php
global $con;

include("includes/db.php");


$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];


$get_user = "select * from admin";
$run_user = mysqli_query($con, $get_user);
$row_user = mysqli_fetch_array($run_user);
                                            
$user_ID = $row_user['user_ID'];
$user_email = $row_user['user_email'];


$inquiry = "SELECT count(*) as inquiry from inquiry where  status = 'unread'";
$run = mysqli_query($con, $inquiry ); 
$row=mysqli_fetch_array($run);
                                    
$inquiries_unread = $row['inquiry'];
?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="logout.php" title="Logout">
          <i class="fa fa-sign-out"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">

      <img src="images/<?php echo"$logo_img" ?>" alt="logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Crossroads Food Lab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="images/<?php echo"$logo_img" ?>" class="img-circle elevation-2" alt="Admin">-->
        </div>
        <div class="info">
           <a href="accounts.php" style="font-size: 25px" class="d-block"><?php echo $_SESSION['user_email'];?></a>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="mailbox.php" class="nav-link">
              <i class="nav-icon fa fa-phone"></i>
              <p>
                Inquiries
                <span class="badge badge-info right"><?php echo $inquiries_unread;?></span>
              </p>
            </a>
          </li>


           <!--reservation-->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Reservation
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="walk-in_res.php" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Walk-ins</p>
                </a>
              </li>

                               <li class="nav-item">
                <a href="tobeprocessed.php" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Pending</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="confirmed.php" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Confirmed</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="cancelled.php" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Cancelled</p>
                </a>
              </li>

                              <li class="nav-item">
                <a href="finished.php" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Finished</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">CONTENT MANAGEMENT</li>

           <!--HOME-->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home_pictures.php" class="nav-link">
                  <i class="fa fa-picture-o nav-icon"></i>
                  <p>Pictures</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="news.php" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
            </ul>
          </li>


           <!--HOME-->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file-photo-o"></i>
              <p>
                Gallery
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customers.php" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Customers</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="gallery_place.php" class="nav-link">
                  <i class="fa fa-map-marker nav-icon"></i>
                  <p>Place</p>
                </a>
              </li>
            </ul>
          </li>


           <li class="nav-item">
            <a href="contact.php" class="nav-link">
              <i class="nav-icon fa fa-phone-square"></i>
              <p>
                Contact Us
              </p>
            </a>
          </li>

                      <li class="nav-item">
            <a href="about.php" class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
          </li>


          <li class="nav-header">FILE MAINTENANCE


            <li class="nav-item">
            <a href="package.php" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Packages
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="product.php" class="nav-link">
              <i class="nav-icon fa fa-cutlery"></i>
              <p>
                Products
              </p>
            </a>
          </li>

            <!--ARCHIVES-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-trash"></i>
              <p>
                Archives
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="archive_reservation.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Reservations</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="archive_inquiry.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Inquiries</p>
                </a>
              </li>

            </ul>
          </li>



            <!--ARCHIVES-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-bar-chart-o"></i>
              <p>
                Reports
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="reports_online-res.php" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Online Reservations</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="reports_walkin-res.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Walkin Reservations</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="reports_inquiry.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Inquiries</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="reports_packages.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Packages</p>
                </a>
              </li>

                              <li class="nav-item">
                <a href="reports_products.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Products</p>
                </a>
              </li>
              
                                            <li class="nav-item">
                <a href="survey.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-danger"></i>
                  <p>Survey Results</p>
                </a>
              </li>

            </ul>
          </li>

             <!--SETTINGS-->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gear"></i>
              <p>
                Settings
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="accounts.php" class="nav-link">
                  <i class="fa fa-lock nav-icon"></i>
                  <p>Accounts</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="backup.php" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <p>Back Up</p>
                </a>
              </li>


            </ul>
          </li>

     <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
                <a href="users_manual.pdf" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <p>User's Manual</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>