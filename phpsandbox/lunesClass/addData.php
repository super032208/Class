</<?php

# return PDO Object

function addData(){

  $config = array (
    'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;',
            'DB_USER' => 'se266_hector',
            'DB_PASSWORD' => 'testing'
  );

  /*$config = array(
              'DB_DNS' => 'mysql:host=192.168.10.10;port=3306;',
              'DB_USER' => 'homestead',
              'DB_PASSWORD' => 'secret'
          );*/

          /* Create a Database connection and save it into the variable */
          $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
          $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      return $db;

}

$testDB = addData();
print_r($testDB);

 ?>
