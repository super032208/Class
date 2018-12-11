<?php include 'connectphp'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
  </head>
  <body>

<?php
  /*  <form method="POST" action="insert.php"><br/>
      ID: <input type="text" value="" /><br/>
      PID: <input type="text" value="" /><br/>
      HOURS: <input type="text" value="" /><br/>
      COMMENT: <input type="text" value="" /><br/>

*/
      ?>
      <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">ID</label>
    <input type="text" class="form-control"name="id"  id="id" placeholder="id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">PID</label>
    <input type="text" class="form-control" name="pid" id="pid" placeholder="pid">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Hours</label>
    <input type="text" class="form-control" name="hours" id="hours" placeholder="hours">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">COMMENT</label>
    <input type="text" class="form-control" name="comment" id="id" placeholder="comments">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


  <input type="submit" value="submit" name="submit"/>
</form>





  </body>
</html>
