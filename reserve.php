<?php 
session_start();
$login_session=$_SESSION['login_user'];

if(empty($login_session))
{
header("location:login.php");
}
global $con;

include("includes/db.php");

$get_logo = "select * from logo";
$run_logo = mysqli_query($con, $get_logo);
$row_logo = mysqli_fetch_array($run_logo);
                                            
$logo_ID = $row_logo['id'];
$logo_img = $row_logo['logo'];

$get = "select * from users where username ='$login_session'";
$run = mysqli_query($con, $get);
$row = mysqli_fetch_array($run);

$login_session=$_SESSION['login_user'];                                 
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$contact_no = $row['contact_no'];

$connection=mysqli_connect("aries.zoom.ph","crossroa","8-1uk:PZlD41yY");

$db=mysqli_select_db("crosssroa_crossroads", $connection);


  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
  
  
$res_total = "SELECT COUNT(*) as res_total from reservation";
$run = mysqli_query($con, $res_total); 
$row=mysqli_fetch_array($run);               

$res_total = 15-$row['res_total']; 

// grab recaptcha library
require_once "recaptchalib.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crossroads Food Lab.</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image" href="admin/images/<?php echo $logo_img;?>">

  <link rel="stylesheet" href="admin/assets/css/animate.css"/>
    <link rel="stylesheet" href="admin/assets/css/hover.css"/>

 <link rel="stylesheet" href="css/style1.css"/>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--FONTS-->
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-json/2.6.0/jquery.json.min.js"></script>
  
  
    <script language="javascript">
    
var obj = "<?php echo $disabledDates; ?>";

        $(document).ready(function () {
            $("#datepicker").datepicker({
                minDate: 0,
                maxDate: 7,
                minDate: +1,
                
        beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [  obj.indexOf(string) == -1 ];
    }
                
                
            });
        });
    </script>



<style>

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
legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}

.output {
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    width: 43%;
}

input {
    margin: 1rem 0;
}

label {
    display: inline-block;
    font-size: .8rem;
}

input:invalid + span:after {
    content: '✖';
    color: #f00;
    padding-left: 10px;
    padding-top: 10px;
    font-size: 20px;
}

input:valid + span:after {
    content: '✓';
    color: #26b72b;
    padding-left: 10px;
    padding-top: 10px;
    font-size: 20px;
}
</style>
</head>

<?php include('nav/reserve-nav.php');?>
<body style="background-color: rgb(40,40,40)">


  <div class="container"><!--OPENING CONTAINER-->

<?php 
 function generateRandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomString1($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


    $res_id = generateRandomString();?>

<br><br><br><br><br>
            <h1 align="center" style="color:#f1c40f" class="animated infinite grow">Reservation Form</h1>
            <h4 align="center" style="color: white;font-family:'Montserrat',sans-serif;">fill the form to reserve a table</h4>
 <hr style="border-color: rgb(231,76,60);">

                <!-- Blog Search Well -->
                  <div style="background-color: #f1c40f;padding: 50px" class="border-img">
                       <!--<h6 align="center">Remaining Reservations: <?php echo $res_total;?></h6>-->
             
                    <form method="post" action="reserve_save.php" enctype="multipart/form-data" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please check the box if you have read and agreed to the Terms and Conditions of the restaurant.'); return false; }">
    <div style=""><h6></h6></div>    
                                                  <div class="row"><!--ROW FOR EMAIL AND MOBILE-->
             <div class="col-md-4">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-users"></i>
                          </span>

                           <input type="hidden" class="form-control" name="res_id" value="<?php echo $res_id;?>">
                           <input type="text" id="pax" maxlength="2" onkeypress="return isNumberKey(event)" class="form-control" name="pax"
           placeholder="Maximum of 15 pax / reservation"
            required/>


                    </div>
                    <!-- /.input-group -->
          </div>



          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                          </span>

                               <input class="form-control" id="datepicker" type="text" name="res_date" placeholder="min to 1 week only"  required>       
                               
                        
                    </div>

        </div>



     <div class="col-md-4">
<div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                          </span>
  <select name="res_time" class="form-control">
    <option value="3:00-5:00 pm">3:00-5:00 pm</option>
    <option value="5:00-7:00 pm">5:00-7:00 pm</option>
    <option value="7:00-9:00 pm">7:00-9:00 pm</option>
    <option value="9:00-10:30 pm">9:00-10:30 pm</option>  
    
  </select>
                    </div>
     </div>
   </div>
   <br>


  <div class="row"><!--ROW FOR EMAIL AND MOBILE-->
          <div class="col-md-6">

                       <div class="input-group"><!-- EMAIL -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                          <input type="text" class="form-control" name="fname" placeholder="First Name*" value="<?php echo $fname;?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>

          <div class="col-md-6">
            
            <div class="input-group"><!-- MOBILE -->
              <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                          </span>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name*" value="<?php echo $lname;?>" required>
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
                          <input type="email" class="form-control" name="email" placeholder="Email*" value="<?php echo $email;?>" required>
                    </div>
                    <!-- /.input-group -->
          </div>

          <div class="col-md-6">
            
            <div class="input-group"><!-- MOBILE -->
              <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                          </span>
                          <input type="text" class="form-control" value="<?php echo $contact_no;?>" name="contact_no" placeholder="09XXXXXXX"  required maxlength="11" onkeypress="return isNumberKey(event)" id="contact_no">
                         
                        </div><!-- /.input-group -->
                    </div>


        </div><!--/.ROW FOR EMAIL AND MOBILE-->


<!-- Trigger the modal with a button -->

            <br><br><br>
             <label class="checkbox-inline">
        <input type="checkbox" name="checkbox" value="check" id="agree" style="top: 18px; left: 200px;"/>
             </label>
          
  <table class="table-condensed">
    <tr>
 <th style="color: rgb(241,196,15)">...................................................................<th/>
 <th align="right">I have read and agreed to the <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Terms and Conditions</button> of the restaurant.</th>
</tr>
</table>



                         <div class="form-group">
                           <center>
                            <br><br>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Terms and Conditions</h2>
      </div>






<div class="modal-body">
        <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab" style="font-size: 15px">On Website</a></li>
        <li><a href="#tab2" data-toggle="tab" style="font-size: 15px">On Store</a></li>
        <li><a href="#tab3" data-toggle="tab" style="font-size: 15px">Cancellation & Modification</a></li>

        </ul>
        <div class="tab-content">
        <div class="tab-pane active" style="background-color: white" id="tab1">
            
              <h3 style="text-align: left">&#x029BF; RESERVATION</h3>
          <h4 style="text-align: left;text-indent: 15px">- We accept fifteen (15) reservations per day. </h4>
          <h4 style="text-align: left;text-indent: 15px">- For reservations of sixteen (16) or more persons, customers will need to call us directly through our contact number. </h4>
          
                    <h3 style="text-align: left">&#x029BF; PAYMENT</h3>
          <h4 style="text-align: left;text-indent: 15px">-Crossroads Food Lab does not accept advance and credit card based payment through online reservation</h4>


           <h3 style="text-align: left">&#x029BF; 10 MINUTE GRACE PERIOD</h3>
           <h4 style="text-align: left;text-indent: 15px">-customers will be given a grace period time before their actual reservation. If exceeded, reservation for online is automatically void. Customers can either wait on walkin reservations queue or book a reservation online again on the other day</h4>
       
          <h3 style="text-align: left">&#x029BF; VOUCHERS (BOOKING CONFIRMATION PROOF)</h3>
          <h4 style="text-align: left;text-indent: 15px">-If your reservation is accepted and confirmed, you will have the possibility to issue and <u>PRINT</u> your own voucher yourself. To do so, please log in to your email account (gmail, yahoo, etc.) and check for the email that is sent to you. <br>
          Or present a <u>SCREENSHOT</u> of the voucher on your phone.
          Please be sure to bring it with you on the participation date. Any person without their voucher will not be accepted on the reservation date</h4>
          






        </div>




        <div class="tab-pane" style="background-color: white" id="tab2">
          <p><h3 style="text-align: left">&#x029BF; NO LEFTOVERS</h3>

<h3 style="text-align: left">&#x029BF; NO SHARING</h3>
<h4 style="text-align: left;text-indent: 15px">-once caught sharing, an additional head will automatically charge on the final billing</h4>

<h3 style="text-align: left">&#x029BF; NO TAKE OUT</h3>

<h3 style="text-align: left">&#x029BF; LEFTOVERS SUBJECT TO TAKE OUT</h3>
<h4 style="text-align: left;text-indent: 15px">- &#8369;80.00/food</h4>
<h4 style="text-align: left;text-indent: 15px">- &#8369;30.00/chicken</h4>                                            
<h4 style="text-align: left;text-indent: 15px">- &#8369;20.00/rice</h4> 

<h3 style="text-align: left">&#x029BF; FIRST COME, FIRST SERVE BASIS</h3>                                       
 <h4 style="text-align: left;text-indent: 15px">-we only accept reservations minimum of 15 persons per group</h4>                                         
<h3 style="text-align: left">&#x029BF; NO REFILL TILL SERVING IS FINISHED</h3>

<h3 style="text-align: left">&#x029BF; SERVING TIME FOR REFILLS IS 10-2O MINUTES OR LESS ONLY</h3>

<h3 style="text-align: left">&#x029BF; SMOKE BREAK IS ALLOWED</h3>  

<h3 style="text-align: left">&#x029BF; LAST CALL FOR REFILL IS UNTIL 10:30PM </h3>  

<h3 style="text-align: left">&#x029BF; LAST ACCEPT OF CUSTOMER IS UNTIL 10:30PM</h3>
 <h4 style="text-align: left;text-indent: 15px">-we will accept guests at 10:30PM but should follow our <ins>"ONE TIME ORDER POLICY"</ins> which is equivalent to 3 sets of food.</h4> 
 <h4 style="text-align: left;text-indent: 15px">-should leave the restaurant at 11:00PM and will pay the remaining leftovers</h4> 
                                           </p>
        </div>

<!--TAB 3 -->
                <div class="tab-pane" style="background-color: white" id="tab3">
          <p>

<h3 style="text-align: left">&#x029BF; MODIFICATION</h3>
 <h4 style="text-align: left;text-indent: 15px">-in case you want to modify a reservation which is already confirmed, it will be considered as a cancellation. You can cancel your reservation from My Account(Reservations Tab), and book the same, or another, reservation on the website.
</h4>


<h3 style="text-align: left">&#x029BF; CANCELLATION</h3>
<h4 style="text-align: left;text-indent: 15px">- in case of transportation delay, customers will be given a 10 minute grace period before their actual reservation, if exceeded, Crossroads Food Lab cannot be held responsible, and will not be obliged to rebook your reservation</h4>

<h3 style="text-align: left">&#x029BF; CANCELLATION METHODS</h3>
<h4 style="text-align: left;text-indent: 15px">- only cancellation requests from My Account(Reservations Tab) will be accepted. Cancellation requests by e-mail will not be accepted. However, you can still contact us by phone during business hours to cancel a reservation.</h4>


 <h3 style="text-align: left">&#x029BF; NO SHOW MEANS RESERVATION IS AUTOMATICALLY VOID</h3>


</p>
        </div>


        
        </div>
        </div>
   </div>


    </div>

  </div>
</div>
<div class="g-recaptcha" data-theme="dark" data-sitekey="6LdeM3EUAAAAAAODxSH-Etm5PHXAxyQsqg6pv_i2"></div><br>
                         <input type="submit" value="Reserve" name="submit" class="btn btn-lg animated infinite pulse" style="font-family:'Montserrat',sans-serif;background-color:rgb(231,76,60);color:white">
                        </div>

                  </form>
                  




                </div>
 
 
 </div>
    








 <br>  <br>
<?php include('footer.php');?>  

<!--captcha-->
  <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <script src="js/style1.js"></script>
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
   
           <script>
      $("#pax")
      .keyup(function()
      {
        var value = $(this).val();
        var text; 
       //
       //result
        if(value >15)
        {
        text=$("h6").text("You reserved more than 15 pax. Crossroads will call you for the details.");

        }
        else if(value <15)
        {
        text=$("h6").text("");
        }

      })
       .keyup();
     
    </script>


</body>


</html>


