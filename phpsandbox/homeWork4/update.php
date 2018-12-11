<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        //include 'header.php';
        include_once 'conn.php';
        include_once 'function.php';

            $db = dbconnect();

            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $stmt = $db->prepare("UPDATE corps set corp = :corp, incorp_dt = :incorp_dt where id = :id");

                $binds = array(
                    ":id" => $id,
                    ":corp" => $corp,
                    ":incorp_dt" => $incorp_dt
                );

                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                }
            } else {
                $id = filter_input(INPUT_GET, 'id');
                $stmt = $db->prepare("SELECT * FROM corps where id = :id");
                $binds = array(
                    ":id" => $id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                if ( !isset($id) ) {
                    die('Record not found');
                }
                $corp = $results['corp'];
                $incorp_dt = $results['incorp_dt'];
            }

        ?>

        <h1><?php echo $result; ?></h1>

        <form method="post" action="#">
            Corp <input type="text"  name="corp" />
            <br />
            Incorp DT <input type="text"  name="incorp_dt" />
            <br />
            <input type="text" value="<?php echo $id; ?>" name="id" />
            <input type="submit" value="update" />
        </form>

        <p> <a href="view-action-bootstrap.php">View page</a></p>

    </body>
</html>
