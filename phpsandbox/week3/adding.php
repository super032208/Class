
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
            $db = getDatabase();

            $user_id = filter_input(INPUT_POST, 'user_id');
            $first_name = filter_input(INPUT_POST, 'Project_name');

            $last_name = filter_input(INPUT_POST, 'Proyect_type');
            $email = filter_input(INPUT_POST, 'email');

            $stmt = $db->prepare("INSERT INTO users SET  user_id = :user_id, first_name = :first_name, last_name = :last_name, email = :email, DateTime = now()");

            $binds = array(
                 ":user_id" => $user_id,
                ":firstname" => $first_name,
                ":lastname" => $last_name,
                ":email" => $email
            );


            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                var_dump($stmt);
                $results = 'Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="POST" action="#">


            First Name <input type="text" value="" name="firstname" />
            <br />
            Last Name  <input type="text" value="" name="lastname" />
            <br />
            Email <input type="text" value="" name="email" />
            <br />     


            <input style="background-color:yellow;" type="submit" value="Submit" />
        </form>
    </body>
</html>
