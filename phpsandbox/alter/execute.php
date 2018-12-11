
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


            $tag = filter_input(INPUT_POST, 'tag');
            $team = filter_input(INPUT_POST, 'team');
            $hours = filter_input(INPUT_POST, 'hours');
            $comment = filter_input(INPUT_POST, 'comment');
            $stmt = $db->prepare("INSERT INTO user SET tag = :tag, team = :team, hours = :hours, comment = :comment");

            $binds = array(
                ":tag" => $tag,
                ":team" => $team,
                ":hours" => $hours,
                ":comment" => $comment
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
            TAG <input type="text" value="" name="tag" />
            <br />
            TEAM  <input type="text" value="" name="team" />
            <br />
            HOURS   <input type="text" value="" name="hours" />
            <br />
            COMMENT <input type="text" value="" name="comment" />
            <br />


            <input style="background-color:yellow;" type="submit" value="Submit" />
        </form>
    </body>
</html>
