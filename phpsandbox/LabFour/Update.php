<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    </head>
    <body>
        <?php

           include_once './db_connect.php';
            include_once './functions.php';
            include './conn.php';

            $db = getDatabase();


            $result = '';

            if (isGetRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                $stmt = $db->prepare("UPDATE corps set id = :id, corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner,
                 phone = :phone");


                $binds = array(
                    ":id" => $id,
                    ":corp" => $corp,
                    ":incorp_dt" => $incorp_dt,
                    ":email" => $email,
                    ":zipcode" => $zipcode,
                    ":owner" => $owner,
                    ":phone" => $phone,


                );

                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                }
            } else {
                $id = filter_input(INPUT_POST, 'id');
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
                $email = $results['email'];
                $zipcode = $results['zipcode'];
                $owner = $results['owner'];
                $phone = $results['phone'];


            }

        ?>

        <h1><?php echo $result; ?></h1>

        <form method="POST" action="#">
            Corporation <input type="text" value="<?php echo $corp; ?>" name="corp" />
            <br />
            E-mail <input type="text" value="<?php echo $email; ?>" name="email" />
            <br />
            Zip Code <input type="text" value="<?php echo $zipcode; ?>" name="zipcode" />
            <br />
            Owner <input type="text" value="<?php echo $owner; ?>" name="owner" />
            <br />
            Phone Number <input type="text" value="<?php echo $phone; ?>" name="phone" />
            <br />
            <input type="hidden" value="<?php echo $id; ?>" name="id" />
            <input type="submit" value="Update" />
        </form>

        <p> <a href="viewpg.php">View page</a></p>

    </body>
</html>
