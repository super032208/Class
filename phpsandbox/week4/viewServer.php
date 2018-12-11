<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


    </head>
    <body>
        <?php

        include 'conn.php';



        $db = getDatabase();

        $stmt = $db->prepare("SELECT * FROM corps");

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
                    <th>Incorp_dt</th>
                    <th>email</th>
                    <th> Zip Code </th>
                    <th> Owner </th>
                    <th> Phone </th>
                </tr>
            </thead>
            <?php

            ?>

            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['incorp_dt']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['zipcode']; ?></td>
                          <td><?php echo $row['owner']; ?></td>
                            <td><?php echo $row['phone']; ?></td>

                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
