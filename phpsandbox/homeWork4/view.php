<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Example</title>
    </head>
    <body>
        <?php

           include_once './functions/dbconnect.php';
           include_once './functions/dbData.php';
           include_once 'function.php';
           include_once 'conn.php';

           $column = filter_input(INPUT_POST, 'column');
           $searchWord = filter_input(INPUT_POST, 'q');
           $column = 'datatwo';
           $searchWord = '8';

           $db = getDatabase();

            $stmt = $db->prepare("SELECT * FROM corps WHERE $column LIKE :search");

            $search = '%'.$searchWord.'%';
            $binds = array(
                ":search" => $search
            );
            $results = array();
             var_dump($results);
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }


        ?>

        <h1>Searching for: <?php echo $searchWord;?></h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Corps</th>
                    <th>Email</th>
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
