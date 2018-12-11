<?php
require('config/config.php');
require('config/conn.php');


$db = getDatabase();
$stmt = $db->prepare("SELECT * FROM actores");
$result = array();






?>
<?php include('inc/header.php'); ?>
    <div class="container">
   <a href="<?php echo ROOT_URL; ?>" class="btn btn-default"  >Back </a>



     <h1> <?php echo $stmt['firstname']; ?> </h1>
    <h1> <?php echo $stmt['lastname']; ?> </h1>
    <h1> <?php echo $stmt['dob']; ?> </h1>
    <p><?php echo $stmt['height']; ?></p>
     </div>
<?php include('inc/footer.php'); ?>
