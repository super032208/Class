

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        #mainDiv {margin-left: 100px; margin-top: 100px;}
        .col1 {width: 120px; float: left;}
        .col2 {float: left;}
        .rowContainer {clear: left; height: 40px;}
        .error {margin-left: 100px; clear: left; height: 40px; color: red;}
         input[type="text"] { width: 250px; display: block; margin-bottom: 10px; background-color: yellow; }

         #bkColor{
           color:blue;
           background-color: lightgreen;
         }
    </style>
<title>Schools Upload</title>
</head>
    <body id="bkColor">
        <div id="mainDiv">
            <h2>Search Schools</h2>
            <form method="post" action="search.php">
                <div class="rowContainer">
                   <div class="col1">School Name:</div>
                   <div class="col2"><input type="text" name="schoolName" value=""></div>
               </div>
               <div class="rowContainer">
                   <div class="col1">City:</div>
                   <div class="col2"><input type="text" name="city" value=""></div>
               </div>
               <div class="rowContainer">
                   <div class="col1">State:</div>
                   <div class="col2"><input type="text" name="state" value=""></div>
               </div>
                 <div class="rowContainer">
                   <div class="col1">&nbsp;</div>
                   <div class="col2"><input type="submit" name="search" value="Search" class="btn btn-warning"></div>
               </div>
            </form>


                    </div>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                      include_once 'fileRead.php';
                    //  include_once 'research.php';


                    }
                    ?>

                    <?php
                      require_once("Required/DBConnect.php");


                      function search($SchoolName = "", $City = "", $State = "")
                      {
                          $sql = "SELECT * from schools WHERE 0=0 ";
                          $results = [];
                          $binds = array();
                          if($SchoolName != "")
                          {
                            $sql .= "AND Schoolname LIKE :name";
                            $binds["name"] = '%'.$SchoolName.'%';
                          }
                          if($City != "")
                          {
                            $sql .= "AND City LIKE :city";
                            $binds["city"] = '%'.$City.'%';
                          }
                          if($State != "")
                          {
                            $sql .= "AND State LIKE :state";
                            $binds["state"] = '%'.$State.'%';
                          }

                          $results = getTableData($sql, $binds);
                          return $results;
                      }


                    ?>


    </body>
</html>
