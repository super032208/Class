</<?php

session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Sessions </title>
  </head>
  <body>
<h5>  Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?>  </h5>
<a href="page3.php"> Go to Page 3 </a>

  </body>
</html>
