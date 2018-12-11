<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include 'header.php';
        include 'conn.php';
        include 'function.php';

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
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email </th>
                    <th> Date </th>
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
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                      <td><a href="Read.php?id=<?php echo $row['id']; ?>">Read</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
