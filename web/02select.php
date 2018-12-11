<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

       require 'dbconnect.php';
      $db = getDatabase();

        $stmt = $db->prepare("SELECT * FROM test");

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             print_r ($results);

        }
        ?>
    </body>
</html>
