<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>

<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>How to Integrate Google “No CAPTCHA reCAPTCHA” on Your Website</title>
  </head>
 
  <body>
 <?php
  if ($response != null && $response->success) {
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
  } else {
?>
    <form action="" method="post">
 
      <label for="name">Name:</label>
      <input name="name" required><br />
 
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
 
<div class="g-recaptcha" data-sitekey="6LdeM3EUAAAAAAODxSH-Etm5PHXAxyQsqg6pv_i2"></div><br>
 
      <input type="submit" value="Submit" />
 
    </form>
 <?php } ?>
<!--captcha-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
 
  </body>
</html>
