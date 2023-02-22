<?php 
session_start();
$login_session=$_SESSION['login_user'];

                                global $con;

                                include("admin/includes/db.php");

                                  $get_logo = "select * from logo";
                                  $run_logo = mysqli_query($con, $get_logo);
                                  $row_logo = mysqli_fetch_array($run_logo);
                                            
                                  $logo_ID = $row_logo['id'];
                                  $logo_img = $row_logo['logo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crossroads Food Lab.</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">




 <link rel="stylesheet" href="css/style1.css"/>
    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

        <link rel="stylesheet" href="admin/assets/css/hover.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/style1.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
body
{
font-family: 'Montserrat', sans-serif;
}
     /* width */
::-webkit-scrollbar {
    width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background-color: rgb(231,76,60);; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: grey; 
}
.border-img
{
border-style: solid;
border-width: 17px 18px;
-moz-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-webkit-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
-o-border-image: url(img/home/border.png) 19 18 19 20 round repeat;
border-image: url(img/home/border.png) 19 18 19 20 round repeat;
}
</style>
</head>

<body style="background-color: rgb(40,40,40)">
  
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2214647095485845"
  theme_color="#f1c40f"
  logged_in_greeting="Welcome to Crossroads Food Lab! How can we help you? :)"
  logged_out_greeting="Welcome to Crossroads Food Lab! How can we help you? :)">
</div>



<?php include('nav/contact-nav.php');?>
<!--/.closing nav-->
<br><br><br><br><br><br><br><br>

	<div class="container"><!--OPENING CONTAINER-->
		<div class="row"><!--OPENING ROW-->
			<div class="col-md-6 col-sm-6">
				<div class="row">
				<div>


                            <?php  
                            include("admin/includes/db.php");

                                     #GALLERY A
                            $get_slidera = "select * from gallery_place where gp_id = 1";
                            $run_slidera = mysqli_query($con, $get_slidera);
                            $row_slidera = mysqli_fetch_array($run_slidera);
                                        
                            $slider_IDa = $row_slidera['gp_id'];
                            $slider_imga = $row_slidera['gp_pic'];

                                $get_contact = "SELECT * from contact_info";
                                $run_contact = mysqli_query($con, $get_contact);
                                $row_contact = mysqli_fetch_array($run_contact);
                                            
                                $contact_no = $row_contact['contact_no'];
                                $contact_email = $row_contact['contact_email'];
                                $contact_address = $row_contact['contact_address'];
                                $contact_id = $row_contact['id'];
?>
                            ?>
                            

        <a href="#" class="hvr-pop">
                <img src="admin/images/place/<?php echo $slider_imga;?>" class="hvr-icon  img-responsive border-img" />
                </a>


				</div>
				</div>

			</div>
<div class="row">
	<!-- CONTACT FORM Column -->
            <div class="col-md-6 col-sm-6">

                
                <div><!-- Blog Search Well -->
                    <h2 align="center" style="color:#f1c40f;font-family: 'Teko', sans-serif;" class="animated infinite pulse"><ins>GET IN TOUCH</ins></h2>
                    <hr style="height:30px;border-color: rgb(231,76,60);">

                    <form method="post" action="message-save.php">

  <div class="row"><!--ROW FOR EMAIL AND MOBILE-->
          <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                          <input type="text" class="form-control" name="fname" placeholder="First Name*" required>
                    </div>
                    <!-- /.input-group -->
          </div>

          <div class="col-md-6">
            
            <div class="input-group"><!-- MOBILE -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name*" required>
                        </div><!-- /.input-group -->
                    </div>

        </div><!--/.ROW FOR EMAIL AND MOBILE-->

				<br>
				<div class="row"><!--ROW FOR EMAIL AND MOBILE-->
					<div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
							<span class="input-group-addon">
                        	<i class="fa fa-envelope"></i>
                        	</span>
                        	<input type="email" class="form-control" name="email" placeholder="Email*" required>
                    </div>
                    <!-- /.input-group -->
					</div>

					<div class="col-md-6">
						
						<div class="input-group"><!-- MOBILE -->
							<span class="input-group-addon">
                        	<i class="fa fa-phone"></i>
                        	</span>
                        	<input type="text" maxlength="11" class="form-control" name="contact_no" required placeholder="09XXXXXXX" onkeypress="return isNumberKey(event)" id="contact_no">
                        	
                        	 
                        	 
                        </div><!-- /.input-group -->
                    </div>

				</div><!--/.ROW FOR EMAIL AND MOBILE-->

						<br>
                    	<div class="form-group"><!-- SUBJECT -->
                      		<input type="text" class="form-control form-control-large" name="subject" placeholder="Subject" required>
                    	</div>

                    	<div class="form-group"><!-- MESSAGE -->
                      		<textarea name = "message" class="form-control" rows="5" cols="40" placeholder="Write your message" required></textarea>
                    	</div>


                    	    <div class="form-group">
                      		<button  class="btn btn-lg animated infinite pulse" style="background-color:rgb(231,76,60);color:white">Send Message</button>   
                    		</div>

               		</form>

                </div><!-- /.Blog Search Well -->


            </div> <!--./ CLOSING CONTACT FORM Column -->
</div>

		    
		</div><!--/.CLOSING ROW-->
<br>
        <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;"  class="animated infinite pulse"><center><ins>CONTACT INFO</ins></center></h2>
    <div class="row">

     <div class="col-sm-4">
      <center>
            <a class="hvr-icon-spin">
                <img src="img/home/loc.png" class="hvr-icon img-responsive" />
                </a>

                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Location</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_address;?></p>
                </center>
            </div>

      <div class="col-sm-4">
        <center>
                 <a  class="hvr-icon-spin">
                <img src="img/home/mail.png" class="hvr-icon img-responsive" />
                </a>
                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Email</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_email;?></p>
            </center>
            </div>

      <div class="col-sm-4">
        <center>
                     <a class="hvr-icon-spin">
                <img  src="img/home/call.png" class="hvr-icon img-responsive" />
                </a>
                <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;" align="center">Contact</h2>
                <p style="color:white;font-size: 20px;font-family: 'Montserrat', sans-serif;" align="center"><?php echo $contact_no;?> </p>
            </center>
            </div>
</div>
<center> <div class="row col-md-12 col-sm-6">
        <h2 style="color:#f1c40f;font-family: 'Teko', sans-serif;"  class="animated infinite fadeIn"><ins>CONNECT WITH US</ins></h2>
        <div>

          <a href="https://web.facebook.com/CrossroadsFoodLab/?_rdc=1&_rdr"  target="_blank" style="color:black;background-color: #f1c40f;border-radius: 50px" class="btn btn-social-icon hvr-pulse">
                <i class="fa-stack fa fa-2x fa-facebook hvr-icon">
                </i></a>

        <a href="#"  target="_blank" style="color:black;background-color: #f1c40f;border-radius: 50px" class="btn btn-social-icon hvr-pulse">
                <i class="fa-stack fa fa-2x fa-instagram hvr-icon">
                </i></a>
<!--
 <a href="#"  target="_blank" style="color:black;background-color: #f1c40f;border-radius: 50px" class="btn btn-social-icon hvr-pulse">
                <i class="fa-stack fa fa-2x fa-twitter hvr-icon">
                </i></a>

                 <a href="#"  target="_blank" style="color:black;background-color: #f1c40f;border-radius: 50px" class="btn btn-social-icon hvr-pulse">
                <i class="fa-stack fa fa-2x fa-google-plus hvr-icon">
                </i></a>-->

        </div>
        </div></center>
       


	</div><!--/.CLOSING CONTAINER-->
		<br><br><br>
<?php include('footer.php');?>	


<!--NO SPECIALCHARACTERS ON NUMBER INPUT-->
   <script type="text/javascript">
     
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

   </script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="772426849565258"
  theme_color="#fa3c4c"
  logged_in_greeting="Welcome to Crossroads Food Lab!!! How can we help you? :)"
  logged_out_greeting="Welcome to Crossroads Food Lab!!! How can we help you? :)">
</div>
</body>
</html>



