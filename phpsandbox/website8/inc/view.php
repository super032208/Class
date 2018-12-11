<?php
$servername = "mysql:host=ict.neit.edu;port=5500;dbname=se266_hector;";
$username = "se266_hector";
$password = "8001596";
$dbname = "actores";

// creating a connection
$conn = ($servername, $username, $password, $db);

// check connection
if($conn-> connect_error){
  die("connection Failde:".$conn->connect_error);
}

$sql = "SELECT * FROM actores";
$result = $conn->query($sql);

if ($result-> num_rows > 0)
{
  echo "<table><tr><th>ID</th><th>Name</th><th>Last Name</th><th>DOB</th><th>Height</th></tr>";

  while ($row = $result-> fetch_assoc()){
    echo "<tr>

  <td>" .  $row["id"]. "</td>
  <td>" .  $row["firstname"]. "</td>
  <td>" .  $row["lastname"]. "</td>
  <td>" .  $row["dob"]. "</td>
  <td>" .  $row["heigt"]. "</td>
  </tr>";

  }
  echo "</table>";
}else {
  echo " 0 results";
}
$conn ->close();

 ?>
