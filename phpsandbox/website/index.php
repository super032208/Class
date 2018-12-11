<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      //  include './dbconnect.php';
        include './function.php';
        include './conn.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();


            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
            $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height");

            $binds = array(
                ":firstname" => $firstname,
                ":lastname" => $lastname,
                ":dob" => $dob,
                ":height" => $height
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
            Name <input type="text" value="" name="firstname" />
            <br />
            Last <input type="text" value="" name="lastname" />
            <br />
            DOB <input type="text" value="" name="lastname" />
            <br />
            Height <input type="text" value="" name="lastname" />
            <br />


            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
