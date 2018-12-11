
<?php
include './function.php';
include './conn.php';


 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>



        <?php

      include './header.php';


        $results = '';
        //var_dump($_POST);
        if (isPostRequest()) {
            $db = getDatabase();


            $id = filter_input(INPUT_POST, 'id');
            $pid = filter_input(INPUT_POST, 'pid');
            $hours = filter_input(INPUT_POST, 'hours');
            $comment = filter_input(INPUT_POST, 'comment');
            //$date = filter_input(INPUT_POST, 'date');

            $stmt = $db->prepare("INSERT INTO entries SET id = :id, pid = :pid, hours = :hours. comment = :comment ");

            $binds = array(
                ":id" => $id,
                ":pid" => $pid,
                ":hours" => $hours,
                ":comment" => $comment,
                //":date" => $date

            );

            /*
             * empty()
             * isset()
             */

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="POST" action="#">
             ID <input type="text" value="" name="id" /><br>

            PID  <input type="text" value="" name="pid" /><br>

            Hours    <input type="text" value="" name="hours" /><br>

            comment    <input type="text" value="" name="comment" />  <br>




            <input style="background-color:yellow;" type="submit" value="Submit" />
        </form>
    </body>
</html>
