<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
include('includes/db.php');


$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$subject = $_REQUEST['subject'];
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("/home2/crossroa/public_html/phpmailer/PHPMailer_5.2.0/class.phpmailer.php");


$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "localhost";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "admin@crossroadsfoodlab.com";  // SMTP username
$mail->Password = "password123"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From ="admin@crossroadsfoodlab.com";
$mail->FromName = "Crossroads Food Lab";

// below we want to set the email address we will be sending our email to.
$mail->AddAddress($email);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);


$mail->Subject = "Reservation Request";


// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->addEmbeddedImage = '<img src="img/logo.jpg">';
$mail->Body    = "<h1>Thank you for choosing Crossroads Food Lab!</h1> <br> 
<b>Dear Valued Customer,</b><br>

We have received your reservation request and will be processing it shortly. Please wait for another email for the reservation details.<br><br>
<hr>
<br><br>
<i>Copyright &copy; Crossroads Food Lab. All rights reserved.</i>
<br> You are receiving this email because you made a reservation via our website. Please do not reply.
";
$mail->AltBody = $message;
if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

         // echo "<script>document.location='reserve.php'</script>"; 
              echo "<script type='text/javascript'>alert('You have successfully booked a table reservation! Please wait for the confirmation email');</script>";
          echo "<script>document.location='details.php'</script>"; 
?>
