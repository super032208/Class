<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            include './conn.php';
            include './functions.php';

            $db = getDatabase();

            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $stmt = $db->prepare("UPDATE corp set corp = :corp, incorp_dt = :incorp_dt where id = :id");

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
                $stmt = $db->prepare("SELECT * FROM corp where id = :id");
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
            Corp <input type="text" value="<?php echo $dataone; ?>" name="corp" />
            <br />
            Incorp <input type="text" value="<?php echo $datatwo; ?>" name="incorp_dt" />
            <br />
            <input type="text" value="<?php echo $id; ?>" name="id" />
            <input type="submit" value="Update" />
        </form>

        <p> <a href="view-action.php">View page</a></p>

    </body>
</html>
