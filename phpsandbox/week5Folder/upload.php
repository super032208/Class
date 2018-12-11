

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
<title>Schools Upload</title>
</head>
    <body id="bkColor">
        <div id="main">
            <h2>Upload File</h2>
            <p>
                Please specify a file to upload and then be patient as the upload may take a while.
            </p>

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file1">
                <input type="submit" value="upload">

            </form>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        include_once 'direct.php';


        }
        ?>

    </body>
</html>
