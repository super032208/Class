<?php
require('config/config.php');
require('config/conn.php');





?>
<?php include('inc/header.php'); ?>

    <div class="container">
<h1> Add Actors </h1>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

<div class="form-group">
<label> First Name </label>
<input type="text" name="author" class="form-control"> </input>
</div>

<div class="form-group">
<label> Last Name </label>
<input type="text" name="Body" class="form-control"> </input>
</div>

<div class="form-group">
<label> DOB </label>
<input type="text" name="Body" class="form-control"> </input>
</div>

<div class="form-group">
<label> Height </label>
<input type="text" name="Body" class="form-control"> </input>
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>

</div>
<?php include('inc/footer.php'); ?>

<h1> View Actors <?php include ('inc/view.php');?></h1>
