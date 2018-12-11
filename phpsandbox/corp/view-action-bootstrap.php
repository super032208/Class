<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    </head>
    <body>
        <?php
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include 'conn.php';
        include './functions.php';
      //include 'function.php';

        /*
         * get and hold a database connection
         * into the $db variable
         */
        $db = getDatabase();

        /*
         * create a variable to hold the database
         * SQL statement
         */
        $stmt = $db->prepare("SELECT * FROM corp");

        /*
         * We execute the statement and make sure we
         * got some results back.
         */
        $results = array();

        if ($stmt->execute() && $stmt->rowCount() > 0) {

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Corp</th>
                    <th>incorp_dt</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi
             * dimensional array. Arrays with arrays.
             *
             * So we loop through each result to get back
             * an array with values
             *
             * feel free to
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */
            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                    <td><a class="btn btn-warning" href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a class="btn btn-primary" href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    <td><a class="btn btn-primary" href="Read.php?id=<?php echo $row['id']; ?>">Read</a></td>

                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
