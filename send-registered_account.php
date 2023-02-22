<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
include('includes/db.php');


$email = $_POST['email'] ;
$message = $_POST['message'] ;
$subject = $_POST['subject'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
$contact_no = $_POST['contact_no'];
$username = $_POST['username']; 
$password = $_POST['password']; 

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


$mail->Subject = "Account Verification";


// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->addEmbeddedImage = '<img src="img/logo.jpg">';
$mail->Body    = "<h1>Thank you for registering your account on Crossroads Food Lab!</h1> <br> 
<b>Dear Valued Customer,</b><br>

Your account has been registered! The details of your account are below:<br><br>
<hr>

Customer Name: ".$fname." ".$lname."
<br>
Username:  ".$username."
<br>
Password: ".$password."
<br>
Email: ".$email."
<br>
Contact No: ".$contact_no."
<br><br>
You may now log into your account to proceed with your reservation! https://crossroadsfoodlab.com/login.php
<br>
<br>
<i>Copyright &copy; Crossroads Food Lab. All rights reserved.</i>
<br>
<br> You are receiving this email because you made a reservation via our website. Please do not reply.
";
$mail->AltBody = $message;
if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

           echo "<script> alert ('Account Registered! Please log in your account')</script>";
                      echo "<script> window.open('login.php','_self')</script>";
?>
