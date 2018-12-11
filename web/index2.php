<?php

$conn_error = 'could not connect';

$DB_DNS = 'mysql:host=ict.neit.edu;port=5500;dbname=se266_hector;';
$DB_USER = 'se266_hector';
$DB_PASSWORD = '8001596';
$mysql_db = 'actores';


if(!mysql_connect($DB_DNS, $DB_USER, $DB_PASSWORD,$mysql_db )|| !mysql_connect_db($mysql_db)){
  die($conn_error);
}

 ?>
