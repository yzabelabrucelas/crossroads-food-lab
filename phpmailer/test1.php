<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
require("/home2/crossroa/public_html/phpmailer/PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "admin@crossroadsfoodlab.com";  // SMTP username
$mail->Password = "password123"; // SMTP password

$mail->From = "admin@crossroadsfoodlab.com";
$mail->FromName = "ANG PAPA MONG ADMIN";
//$mail->AddAddress("josh@example.net", "Josh Adams");
$mail->AddAddress("kqlqmqy@gmail.com");                   // name is optional
//$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "HI YZA!";
$mail->Body    = "MASARAP ANG <b>bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>


</body>
</html>