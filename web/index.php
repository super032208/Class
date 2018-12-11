

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php

        include './conn.php';

        $db = getDatabase();

        $stmt = $db->prepare("SELECT * FROM actors");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table style="width:100%; border:1px solid black;">
            <thead>
                <tr>
                    <th style="border:1px solid black;">ID</th>
                    <th style="border:1px solid black;">  Name</th>
                    <th style="border:1px solid black;" > Last Name </th>
                    <th style="border:1px solid black;" > DOB </th>
                    <th style="border:1px solid black;" > Height </th>
                </tr>
            </thead>
            <tbody>
            <?php

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td style="border:1px solid black;"><?php echo $row['id']; ?></td>
                    <td style="border:1px solid black;"><?php echo $row['firstname']; ?></td>
                    <td style="border:1px solid black;"><?php echo $row['lastname']; ?></td>
                    <td style="border:1px solid black;"><?php echo $row['dob']; ?></td>
                    <td style="border:1px solid black;"><?php echo $row['height']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </body>
</html>
