 <?php

 session_start();
 $name = $_SESSION['name'];
 $email = $_SESSION['email'];

  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title> PHP Sessions </title>
    </head>
    <body>
      <h1> Hello <?php echo $name; ?> </h1>

    </body>
  </html>
