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
                    <th>first_name</th>
                    <th>last_name/th>
                    <th>email</th>

                    <th>Register day</th>

                </tr>
            </thead>
            <?php

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                  <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                      <td><?php echo  date("D, d M Y",strtotime($row['date'])); ?></td>

                            <td><a class="btn btn-warning" href="update.php?id=<?php echo $row['user_id']; ?>">Update</a></td>
                            <td><a class="btn btn-primary" href="delete.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
                            <td><a class="btn btn-primary" href="read.php?id=<?php echo $row['user_id']; ?>">Read</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
