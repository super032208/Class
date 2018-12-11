<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include_once './functions/dbconnect.php';
        include_once './functions/dbData.php';
        //include './function.php';

            $db = dbconnect();

            $id = filter_input(INPUT_GET, 'id');

            $stmt = $db->prepare("DELETE FROM corps where id = :id");

            $binds = array(
                ":id" => $id
            );


        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }

        ?>


        <h1> Record <?php echo $id; ?>
         <?php if ( !$isDeleted ): ?>
          Not
        <?php endif; ?>
        Deleted</h1>

      <p> <a href="view-order.php">View page</a></p>



    </body>
</html>
