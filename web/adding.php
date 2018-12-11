<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './conn.php';
      // include './functions.php';

        $results = '';

      //  if (isPostRequest()) {
            $db = getDatabase();

            $stmt = $db->prepare"INSERT INTO actors (firstname, lastname, dob, height);
            VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["dob"]."' ,'".$_POST["height"]."')";


?>



        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">
            First Name <input type="text" value="" name="firstname" />
            <br />
            Last Name <input type="text" value="" name="lastname" />
            <br />
            DOB <input type="text" value="" name="dob" />
            <br />
            Height <input type="text" value="" name="height" />
            <br />


            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
