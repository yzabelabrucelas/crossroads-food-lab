<?php 
global $con;
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
  $res_time = $_POST['res_time'];
    $res_date = date('Y-m-d', strtotime($_POST['res_date']));

$queryS = "SELECT res_date FROM walkins WHERE res_date = '$res_date'";
$resultS = mysqli_query($con, $queryS);
$resultCheck = mysqli_num_rows($resultS);
if($resultCheck >= 4)//palitan ung 1 kung ilan ung max
  {
    echo '<script> alert("WARNING: Cannot accomodate walk-in reservations. This date is already full, Please select another date.") </script>';
    echo '<script> document.location="walk-in_res.php" </script>';
      
 }

else{ 
$pax = $_POST['pax'];
    $res_id = "CFL-RES-".generateRandomString();
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $res_time = $_POST['res_time'];
    $res_date = date('Y-m-d', strtotime($_POST['res_date']));


  $queryI = "INSERT INTO walkins(res_id,fname,lname,pax,res_date,res_time) 
          VALUES(
          '$res_id',
          '$fname',
          '$lname',
          '$pax',
          '$res_date',
          '$res_time')";
  $resultI = mysqli_query($con,$queryI);
}
    if ($resultI) {
       
        echo "<script type='text/javascript'>alert('Successfully added new walk-in reservation!');</script>";
          echo "<script>document.location='walk-in_res.php'</script>"; 
    exit();
      }
 }
?>  

    
