<?php
session_start();

if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false){
  header("Locationa: log.php");

}


  ?>
  <h2> Success </h2>
