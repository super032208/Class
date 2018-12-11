<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include 'header.php';
        include 'conn.php';
        include 'function.php';

            $db = getDatabase();

            $id = filter_input(INPUT_GET, 'user_id');

            $stmt = $db->prepare("DELETE FROM users where user_id = :user_id");

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

        <p> <a href="view-action-bootstrap.php">View page</a></p>



    </body>
</html>
