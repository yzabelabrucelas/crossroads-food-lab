<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$subject = $_REQUEST['subject'];

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
$mail->FromName = "Admin";

// below we want to set the email address we will be sending our email to.
$mail->AddAddress($email);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);


$mail->Subject = "$subject";


// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->addEmbeddedImage = '<img src="/img/logo.jpg">';
$mail->Body    = $message;
$mail->AltBody = $message;


if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
