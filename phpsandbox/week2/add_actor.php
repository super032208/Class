<?php
    include './header.php';
    include ('./conn.php');
?>
<h1> Time Card Project </h1>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $title = filter_input(INPUT_POST, 'title');
        $type = filter_input(INPUT_POST, 'type');




        ?>
        <form method="post" action="#">

            Project Title <input style="margin:2%;" type="text" value="" name="title" />
            <br />
            Project Type <input style="margin:2%;" type="text" value="" name="type" />
            <br />


            <input type="submit" value="Submit" />

        </form>



    </body>
</html>
