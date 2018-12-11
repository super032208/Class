<?php

function getDatabase() {

         # PHP script runs local or remote. Database server remote

     $config = array(
            'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_hector;',
            'DB_USER' => 'se266_hector',
            'DB_PASSWORD' => '8001596'
        );



        /* Create a Database connection and save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $db;
}

$testDB = getDatabase();


?>
