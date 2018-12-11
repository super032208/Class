<?php


function getDatabase(){
    $config = array(
      'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_hector;',
      'DB_USER' => 'se266_hector',
      'DB_PASSWORD' => '8001596'
    );

    $db = new PDO($config['DB_DNS'], $config['DB_USER'],$config['DB_PASSWORD']);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function isPostRequest(){
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST');
}

function addProject ( $projectName) {

    global $db;
    $stmt = $db->prepare("INSERT INTO proje (tag, team, hours, comment) VALUES (:projectName)");
    //$stmt = $db->prepare("UPDATE corps set corp = :corp, incorp_dt = :incorp_dt where id = :id");
    // <?php

// tag, team, hours, comment
    $result = "Something is wrong";
    $binds = array(
        ":projectName" => $projectName,
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0){
        $result = 'Project Added';
    }

    return ($result);

}

?>
