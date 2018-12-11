<?php

    require 'functions.php';

    $results = '';
     if (isPostRequest()){
             $db = getDatabase();
             $projectName = filter_input(INPUT_POST, 'projectName');
            $results = addProject ($projectName);


        }
?>

<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<form method ="post" action="addproject.php">
    Project Name:<input type="text" name="tag" value=""/>
    Created Date: <input type="text" name="<?php echo $d ?> " value=""/>
    <input type="submit" value="Submit"/>

</form>


<h1><?php echo $results; ?></h1>
