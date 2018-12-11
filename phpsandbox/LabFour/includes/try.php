<!DOCTYPE html>
        <?php



        ?>



    <html>
        <head>
            <meta charset="utf-8">
            <title>Search Form</title>
        </head>
        <body>
            <form action="#" method="get">
                <p>choose from the following criteria:</p>
                <br>
                <div>
                    <label for="owner">By owner:</label>
                    <select name="owner" id="owner">
                        <option value=""></option>
                        <option value="">Any owner</option>
                            <?php foreach ($own as $row): ?>
                            <option value="<?php echo ($row["id"]); ?>"><?php echo($row["owner"]); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="corp">By corporation:</label>
                    <select name="corp" id="corp">
                        <option value=""></option>
                        <option value="">Any corporation</option>
                        <?php foreach ($cors as $cor): ?>
                            <option value="<?php echo($cor['id']); ?>"><?php echo($cor['corp']); ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="text">Containing text:</label>
                    <input type="text" name="text" id="text">
                </div>
                <div>
                    <input type="hidden" name="action" value="search">
                    <input type="submit" value="Search">
                </div>
            </form>


          

        </body>
    </html>
