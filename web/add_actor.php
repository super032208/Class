<?php
    include './header.php';
    include ('config/conn.php');
?>
<h1>Add Actor</h1>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $dataoneVal = filter_input(INPUT_POST, 'firstname');
        $datatwoVal = filter_input(INPUT_POST, 'lastname');
        $datatwoVal = filter_input(INPUT_POST, 'dob');
        $datatwoVal = filter_input(INPUT_POST, 'height');

        echo $dataoneVal;
        echo $datatwoVal;



        ?>
        <form method="post" action="#">

            First name <input type="text" value="" name="firstname" />
            <br />
            Last name <input type="text" value="" name="lastname" />
            <br />
            DOB <input type="text" value="" name="dob" />
            <br />
            Height <input type="text" value="" name="height" />
            <br />

            <input type="submit" value="Submit" />

        </form>



    </body>
</html>
