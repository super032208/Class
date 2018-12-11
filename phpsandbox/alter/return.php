<?php
date_default_timezone_set('UTC');
$user = 'Hector';

function display_date(){
  return date('l, jS F ');
}

function welcome($user)
{

$hour = date('H');
$greeting = ($hour < 12)?
'<br> Good Morning': '<br> Good Day ';
$greeting .= $user;
return $greeting;
}

echo display_date();
echo welcome($user);

?>

<form action="action_handler.php" method="POST">
<dl>
  <dt>Name:
    <dd><input type="text" name="name">
      <dt> Email Address:
        <dd> <input type="text" name="mail">
          <dt> Comments:
            <dd><textarea rows="5" cols="20" name="comment">
            </textarea>
          </dl>
          <p><input type="submit"></p>
</form>


<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$comment = $_POST['comment'];
echo "<p> Thank you for this comment $name ... </p>";
echo "<p><li>$comment</li><p>";
echo "<p> We will reply to $mail</p>";

?>
