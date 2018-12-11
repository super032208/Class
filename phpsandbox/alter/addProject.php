<?php
    include './header.php';
    include ('./conn.php');
?>
<h1> ### New Project ### </h1>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $dataoneVal = filter_input(INPUT_POST, 'user_id');
        $datatwoVal = filter_input(INPUT_POST, 'first_name');
        $datathreeVal = filter_input(INPUT_POST, 'last_name');
        $datafourVal = filter_input(INPUT_POST, 'email');
        $datafiveVal = filter_input(INPUT_POST,'pass');
        $datasixVal = array_filter(INPUT_POST, 'reg_date');
        //pass
        // reg_date

        echo $dataoneVal;
        echo $datatwoVal;



        ?>
        <form method="post" action="#">

            Tag <input type="text" value="" name="tag" />
            <br />
            Team <input type="text" value="" name="team" />
            <br />
            HOURS <input type="text" value="" name="hours" />
            <br />
            COMMENT <input type="text" value="" name="comment" />
            <br />

            <input type="submit" value="Submit" />

        </form>



    </body>
</html>
