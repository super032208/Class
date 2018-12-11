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
        <h1>My Forms</h1>
        <div class="container">
        <?php
        // include_once - http://php.net/manual/en/function.include-once.php
        include_once "./functions/dbData.php";
        //include './delete.php';

        // hidden field with same name but different value in form1 and form2
        $action = filter_input(INPUT_POST, 'action');

        if ( $action === 'sort' ) {
            echo 'submited form 1';
            $dataone = filter_input(INPUT_POST, 'dataone');
            echo '<br>'.$dataone;
            $datatwo = filter_input(INPUT_POST, 'datatwo');
            echo '<br>'.$datatwo;
            $results = getSortTest($dataone, $datatwo);
        } else if ( $action === 'search' ) {
            echo 'submited form 2';
            $datatwo = filter_input(INPUT_POST, 'datatwo');

            $results = getSearchTest('col','Q');
            var_dump($results);die();
        } else {
            $results = getAllTestData();
        }

        // include two forms
        include './includes/form1.php';
        include './includes/form2.php';


        //    $results = getAllTestData();
        ?>
        </div>
       <div class="container">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:10%">ID</th>
                        <th style="width:30%">Corp Name </th>
                        <th style="width:30%">Corp Email </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
            <div style="max-height: 250px; overflow-y: scroll;">
                <table class="table table-striped">
                    <tbody>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <td style="width:5%"><?php echo $row['id']; ?></td>
                            <td style="width:15%"><?php echo $row['corp']; ?></td>
                            <td style="width:15%"><?php echo $row['email']; ?></td>
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
<?php

include_once './function.php';
include_once './view.php';
include_once './view-order.php';
 ?>
    </body>
</html>
