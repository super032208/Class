<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include 'conn.php';
        include 'function.php';
        include 'read.php';


        $db = getDatabase();

        $stmt = $db->prepare("SELECT * FROM users");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>

                    <th>Register Date</th>
                </tr>
            </thead>
            <?php

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo  date("D, d M Y",strtotime($row['date'])); ?></td>
                    <td><a class="btn btn-warning" href="Update.php?id=<?php echo $row['user_id']; ?>">Update</a></td>
                    <td><a class="btn btn-primary" href="Delete.php?id=<?php echo $row['usr_id']; ?>">Delete</a></td>
                    <td><a class="btn btn-primary" href="read.php?id=<?php echo $row['usr_id']; ?>">Read</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
