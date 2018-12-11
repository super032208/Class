<?php
/**
 * Function to establish a database connection
 *
 * @return PDO Object
 */
function dbconnect() {
        $config = array(
          'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_hector;',
          'DB_USER' => 'se266_hector',
          'DB_PASSWORD' => '8001596'
        );

    try {
        /* Create a Database connection and
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
        /* If the connection fails we will close the
         * connection by setting the variable to null */
        $db = null;
        $message = $ex->getMessage();
        include './includes/error.php';
        exit();
    }

    return $db;
}
