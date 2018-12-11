<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include_once 'function.php';
        include_once 'conn.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();


            $id = filter_input(INPUT_POST, 'id');
            $pid = filter_input(INPUT_POST, 'pid');
            $name = filter_input(INPUT_POST, 'pid');
              $hours = filter_input(INPUT_POST, 'hours');
                $comment = filter_input(INPUT_POST, 'comment');
                  //$name = filter_input(INPUT_POST, 'name');

            $stmt = $db->prepare("INSERT INTO projects SET id = :id, pid = :pid, hours = :hours, comment = :comment");


        //  Date: <input id="date" type="text" name="name" value=""/><br>

            $binds = array(
                ":id" => $id,
                ":name" => $name,
                ":pid" => $pid,
                ":hours" => $hours,
                ":comment" => $comment
                          );


            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="POST" action="insert.php">

        <input type="text" value="" name="user" placeholder="USER" />
        <br />
        <input type="text" value="" name="password" placeholder="PASSWORD" />
        <br />

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
