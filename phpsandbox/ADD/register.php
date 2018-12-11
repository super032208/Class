<?php

$page_title = 'register';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

include 'conn.php';
$errors = array();

if(empty($_POST['first_name']))
{ $errors[] = 'Enter your first name';}
else {  ($_POST['first_name']);}


if(empty($_POST['last_name']))
{ $errors[] = 'Enter your last name';}
else {($_POST['last_name']);}


if(empty($_POST['email']))
{ $errors[] = 'Enter your email';}
else { ($_POST['email']);}


if(!empty($_POST['pass1']))
{

if($_POST['pass1'] != $_POST['pass2'])
{$error[] = 'Password do not match';}
else {
($_POST['pass1']);
}

}
else {
  $errors[] = 'Enter your Password';
}


if(empty($errors))
{

$q = "SELECT user_id FROM userProject WHERE email='$e'";


$r = ( $q);
var_dump($r);
if( ($r) != 0)
{
  $errors[] = 'Email address already registered <a href="login.php">Login</a>';
}

}

if(empty($errors))
{
  $q = "INSERT INTO userProject (first_name, last_name, email, pass, reg_date) VALUES('$fn', '$ln', '$e', SHA1('$p'), NOW())";
  $r = mysqli_query($config, $q);

if($r)
{
  echo '<h1> Registered!</h1>
  <p> You are now registered</p>
  <p><a href="login.php">Login</a></p>' ;


}

mysqli_close($config);
exit();

}


else {
  echo '<h1> Error!</h1>
  <p id="err_msg"> The followig error(s) ocurred:<br>';
  foreach($errors as $msg)
  {
    echo " - $msg<br>";
  }

  echo 'Please try again </p>';
  mysqli_close($config);
}

}

?>


<h1> Register! </h1>

<form action="register.php" method="POST">
  <p>
    First Name: <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>">
Last Name: <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>">
</p> <p>
  Email Address: <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
</p> <p>
  Password: <input type="password" name="pass1" value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1'];?>">
  Confirm Password: <input type="password" name="pass2" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2'];?>">
</p> <p>
  <input type="submit" value="register"></p>
</form>
