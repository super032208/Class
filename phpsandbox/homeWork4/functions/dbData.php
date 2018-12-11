<?php

include_once "conn.php";

function getAllTestData(){
    // establish a database connection
    $db = dbconnect();

    // prepare the SQL statement
    $stmt = $db->prepare("SELECT * FROM corps");

    $results = array();
    // execute the statement (Returns BOOL),
    //     if TRUE check the row count
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        // fetches all rows for the conditions of SQL statement as an Associative Array
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    return $results;
}

/*
 * $stmt = $db->prepare("SELECT * FROM test ORDER BY $column $order");
 */
function getSortTest($column, $order)
{
    return [];
}

/*
 * $stmt = $db->prepare("SELECT * FROM test WHERE $column LIKE :search");
 */
function getSearchTest($column, $search){
    return [];
}


function getGroceries() {
    $groceries = [
      "email",
      "owner",
      "id",
      "phone",
      "corps"
    ];

    return $groceries;
}
