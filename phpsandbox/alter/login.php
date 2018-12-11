

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        #main {margin-left: 100px; margin-top: 100px;}
        .col1 {width: 100px; float: left;}
        .col2 {float: left;}
        .rowContainer {clear: left; height: 40px;}
        .error {margin-left: 100px; clear: left; height: 40px; color: red;}

        #bkColor{
          color:blue;
          background-color: lightgreen;
        }
    </style>
<title> Login Pages</title>
</head>
<body id="bkColor">





    <div id="main">
        <form method="post" action="login.php">

            <div class="rowContainer">
                <h3>Please Login !!! </h3>
            </div>
            <div class="rowContainer">
                <div class="col1">User Name:</div>
                <!-- login user is Hector -->
                <div class="col2"><input type="text" name="userName" value="Hector"></div>
            </div>
            <div class="rowContainer">
                <div class="col1">Password:</div>
                <!-- Password for log in is Delcid -->
                <div class="col2"><input type="password" name="password" value="Delcid"></div>
            </div>
              <div class="rowContainer">
                <div class="col1">&nbsp;</div>
                <div class="col2"><input type="submit" name="login" value="Login" class="btn btn-warning">


         </div>
                     </form>

    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      include_once 'redirect.php';


    }
    ?>

</body>
</html>
