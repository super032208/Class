<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sort Example</title>
    </head>
    <body>
        <?php
            include_once './functions/dbconnect.php';
            include_once 'conn.php';


            $column = filter_input(INPUT_POST, 'column');

            if (!isset($column)) {
                $column = 'dataone';
            }
            $order = filter_input(INPUT_POST, 'order');
            if (!isset($order)) {
                $order = 'DESC';
            }
            //$order = 'ASC';

            $db = dbconnect();

            $stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");

            $results = array();
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        ?>

        <h1>Ordered by column <?php echo $column." ".$order;?></h1>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data One</a></th>
                    <th>Data Two</a></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                     </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </body>
</html>
