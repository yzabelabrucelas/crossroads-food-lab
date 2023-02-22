<?php 

include('includes/db.php');
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

 if (isset($_POST['submit'])) 
{ 
$pax = $_POST['pax'];
    $res_id = "CFL-RES-".generateRandomString();
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact_no = $_POST['contact_no'];
  $email = $_POST['email'];
  $res_time = $_POST['res_time'];
    $res_date = date('Y-m-d', strtotime($_POST['res_date']));

 
 date_default_timezone_set("Asia/Manila");
  $sent_date = date("Y-m-d H:i:s");

$queryS = "SELECT res_date FROM reservation WHERE res_date = '$res_date'";
$resultS = mysqli_query($con, $queryS);
$resultCheck = mysqli_num_rows($resultS);
if($resultCheck >= 15)//palitan ung 1 kung ilan ung max
  {
    echo '<script> alert("This date is already full, Please select another date.") </script>';
    echo '<script> document.location="reserve.php" </script>';
      
 }

else{ 
$pax = $_POST['pax'];
    $res_id = "CFL-RES-".generateRandomString();
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact_no = $_POST['contact_no'];
  $email = $_POST['email'];
  $res_time = $_POST['res_time'];
    $res_date = date('Y-m-d', strtotime($_POST['res_date']));

 
 date_default_timezone_set("Asia/Manila");
  $sent_date = date("Y-m-d H:i:s");

  $queryI = "INSERT INTO reservation(res_id,fname,lname,contact_no,email,pax,res_date,res_time,sent_date,status) 
          VALUES(
          '$res_id',
          '$fname',
          '$lname',
          '$contact_no',
          '$email',
          '$pax',
          '$res_date',
          '$res_time',
          '$sent_date',
          'to be processed')";
  $resultI = mysqli_query($con,$queryI);
}
    if ($resultI) {
        include('send-confirmation_mail.php');
       
        echo "<script type='text/javascript'>alert('Successfully added new reservation! Please wait for the confirmation email');</script>";
          echo "<script>document.location='details.php'</script>"; 
    exit();
      }
 }
?>  
