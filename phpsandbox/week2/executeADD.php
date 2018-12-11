
<?php
include_once 'function.php';
include_once 'conn.php';


 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>



        <?php

      include_once 'header.php';
      //include_once 'function.php';


        $results = '';

        if (isPostRequest()) {
            $db = dbconnect();


            $stmt = $db->prepare("INSERT INTO projects SET id = :id, name = :name, date = now()");

            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $tiempo = filter_input(INPUT_POST, 'nows');

            $binds = array(
                ":id" => $id,
                ":name" => $name,
                ":nows" => $tiempo
            );

            /*
             * empty()
             * isset()
             */

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <h1>Add datetime with data</h1>
        <form method="post" action="#">
            Id <input type="text" value="" name="id" />
            <br />
            Name <input type="text" value="" name="name" />
            <br />
            tiempo <input type="datetime-local" value="" name="now">




            <input style="background-color:green;" type="submit" value="Submit" />
        </form>
    </body>
</html>
