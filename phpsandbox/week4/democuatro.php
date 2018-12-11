
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <h1>My Forms</h1>
        <div class="container">
        <!-- posts to the parent file which included it -->
<form action="#" method="post">
    <fieldset>
        <legend>Form 1</legend>

        <label>Acending </label>
        <!-- Note: the radio button name attributes are the same -->
       <input type="radio" name="dataone" value="ford" />
       <label>Decending </label>
        <input type="radio" name="dataone" value="honda" />

        <label>Data 2</label>
        <!-- the selected option value is assigned
        to the attribute name of <select> -->
        <select name="datatwo">
            <option value="corp">Corp</option>
            <option value="incorp_dt">Incorp_dt</option>
        </select>

        <label>Dynamic Select</label>
        <select name="datathree">
                    <option value="email">Email</option>
                    <option value="zipcode">Zip Code</option>
                    <option value="phone">Phone</option>
                </select>
        <input type="hidden" name="action" value="Submit1" />
        <input type="submit" value="Submit1" />
    </fieldset>
</form><!-- posts to the parent file which included it -->
<form action="#" method="post">
    <fieldset>
        <legend>Form 2</legend>
        <label>Data One</label>
        <input name="dataone" type="search" placeholder="Search...." />
        <input name="datatwo" value="data2" type="hidden" />

         <input type="hidden" name="action" value="Submit2" />
        <input type="submit" value="Submit" />
    </fieldset>
</form>        </div>

<?php include './viewServer.php'; ?>
    </body>
</html>
