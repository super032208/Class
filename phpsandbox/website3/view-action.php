<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include './dbconnect.php';
        include './functions.php';

        /*
         * get and hold a database connection
         * into the $db variable
         */
        $db = getDatabase();

        /*
         * create a variable to hold the database
         * SQL statement
         */
        $stmt = $db->prepare("SELECT * FROM corps");

        /*
         * We execute the statement and make sure we
         * got some results back.
         */
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>ZipCode</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
