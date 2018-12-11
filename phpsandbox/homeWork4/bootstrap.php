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
        include_once 'conn.php';

           //include_once './functions/dbconnect.php';
           include_once './functions/dbData.php';
           //include './delete.php';

           $results = getAllTestData();

        ?>


        <div class="container">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:5%">ID</th>
                        <th style="width:15%">corps</th>

                        <th style="width:15%">Email</th>
                        <th style="width:15%">Zip Code</th>
                        <th style="width:15%">Owner</th>
                        <th style="width:15%">Phones </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
            <div style="max-height: 800px; overflow-y: scroll;">
                <table class="table table-striped">
                    <tbody>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <td style="width:5%"><?php echo $row['id']; ?></td>
                            <td style="width:15%"><?php echo $row['corp']; ?></td>

                            <td style="width:15%"><?php echo $row['email']; ?></td>
                            <td style="width:15%"><?php echo $row['zipcode']; ?></td>
                            <td style="width:15%"><?php echo $row['owner']; ?></td>
                            <td style="width:15%"><?php echo $row['phone']; ?></td>

                            <td style="width:7%"><a class="btn btn-warning" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            <td style="width:7%"><a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>
