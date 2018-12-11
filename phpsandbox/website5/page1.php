<?php

if(isset($_POST['submit'])){
  $username = htmlentities($_POST['username']);

  setcookie('username', $username. time()+3600);
  // 1 hour
  header('Location : page2.php');
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP Cookies </title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <input type="text" name="username" placeholder="Username">
       <br>
       <input type="submit" name="submit" value="submit">
     </form>


  </body>
</html>
