<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

      include 'config.php';
      include 'functions.php';

        $db = getDatabase();









        $stmt = $db->prepare("INSERT INTO projects (id, pid,hours, comment) VALUES ('1', 'dos', '20', 'result') ");

        $results = array();

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table>
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

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                    <td><a href="Update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                      <td><a href="Read.php?id=<?php echo $row['id']; ?>">Read</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
