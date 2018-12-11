<!DOCTYPE HTML>
<?php
session_start();

$username = "userss";
$password = "passwordss";

if(isset($_SESSION['logged in']) && $_SESSION['loggedin'] == true){
 header("Location: success.php");

}

if(isset($_POST['username']) && isset($_POST['password'])){
  if($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION['loggedin'] = true;
    header("Location: success.php");
  }
}

 ?>

 <html>
    <body>
       <form method="POST" action="log.php">
         Username:<br/>
         <input type="text" name="username"> <br/>
         Password:<br/>
         <input type="password" name="password"><br/>
         <input type="submit" value="Login !!">
       </form>
    </body>
 </html>
