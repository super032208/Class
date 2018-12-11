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

            $result = '';
            if (isPostRequest()) {
                $first_name = filter_input(INPUT_POST, 'first_name');
                $last_name = filter_input(INPUT_POST, 'last_name');
                $email = filter_input(INPUT_POST, 'email');
                $stmt = $db->prepare("UPDATE users set first_name = :first_name, last_name = :last_name where user_id = :user_id");

                $binds = array(
                    ":first_name" => $first_name,
                    ":last_name" => $last_name,
                    ":email" => $email
                );

                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                }
            } else {
                $id = filter_input(INPUT_GET, 'id');
                $stmt = $db->prepare("SELECT * FROM users where user_id = :user_id");
                $binds = array(
                    ":id" => $id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                if ( !isset($id) ) {
                    die('Record not found');
                }
                $first_name = $results['first_name'];
                $last_name = $results['last_name'];
            }

        ?>

        <h1><?php echo $result; ?></h1>

        <form method="post" action="#">
            First Name: <input type="text"  name="first_name" />
            <br />
            Last Name: <input type="text"  name="last_name" />
            <br />
            <input type="text" value="<?php echo $id; ?>" name="id" />
            <input type="submit" value="update" />
        </form>

        <p> <a href="view-action-bootstrap.php">View page</a></p>

    </body>
</html>
