

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <style>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">

#comm{
  margin: 2%;
  width: 40%;
  padding: 1%;
  font-size:3%;
  color: green;
  text-align: center;
}
#id,#pid,#hrs,#date{
  margin: 2%;
  width: 20%;
  padding: 1%;
  font-size:3%;
  color: green;
  text-align: center;

}

</style>
</head>
<body>
<form action="index.php" method="POST">

  ID: <input id="id" type="text" name="id" value="" placeholder="ID"/><br/>
 PID: <input id="pid" type="text" name="pid" value="" placeholder="PID"/><br>
  Hours: <input id="hrs" type="text" name="hours" value="" placeholder="HOURS"/><br>
Comments: <input id="comm" type="text" name="comment" value="" placeholder="COMMENTS"/><br>
<input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>
