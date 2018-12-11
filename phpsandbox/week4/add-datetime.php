<!--

********************************************************

RUN THE SQL FILE BEFORE YOU CONTINUE WITH THIS DEMO

********************************************************

-->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conn.php';
        include 'func.php';
        include 'header.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();

            /*
             * Notice we use the now function from MySql to add the date and time to the date column.
             * The date column is a varchar but can also be a datetime format
             */
            $stmt = $db->prepare("INSERT INTO corps SET corps = :corps, incorp_dt = :incorp_dt, date = now()");

            $corp = filter_input(INPUT_POST, 'corp');
            $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');

            $binds = array(
                ":corps" => $corp,
                ":incorp_dt" => $incorp_dt
            );

            /*
             * empty()
             * isset()
             */

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <h1>Add datetime with data</h1>
        <form method="post" action="#">
            Corp <input type="text" value="" name="corp" />
            <br />
            incorp_dt <input type="text" value="" name="incorp_dt" />
            <br />

            <input type="submit" value="Submit" />
        </form>

        <p><a href="view-datetime.php">View Data</a></p>
    </body>
</html>
