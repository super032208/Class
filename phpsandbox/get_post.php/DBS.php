<?php

class DBSpring extends DB {

    public function __construct() {
        $dbConfig = array(
          'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;',
          'DB_USER' => 'se266_hector',
          'DB_PASSWORD' => '8001596'
        parent::__construct($dbConfig);
    }

}
