<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="UTF-8">
          <title></title>
      </head>
      <body>

          <?php

          include './conn.php';

          $db = getDatabase();

          $stmt = $db->prepare("SELECT * FROM users");

          $results = array();
          if ($stmt->execute() && $stmt->rowCount() > 0) {
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
          }
          ?>

          <table style="width:100%; border:1px solid black;">
              <thead>
                  <tr>
                      <th style="border:1px solid black;"> First Name </th>
                      <th style="border:1px solid black;"> Last Name</th>
                      <th style="border:1px solid black;"> Email Address </th>
                      <th style="border:1px solid black;"> Password </th>
                      <th style="border:1px solid black;">  </th>
                  </tr>
              </thead>
              <tbody>
              <?php

              ?>

              <?php foreach ($results as $row): ?>
                  <tr>
                      <td style="border:1px solid black;"><?php echo $row['id']; ?></td>
                      <td style="border:1px solid black;"><?php echo $row['firstname']; ?></td>
                      <td style="border:1px solid black;"><?php echo $row['lastname']; ?></td>
                      <td style="border:1px solid black;"><?php echo $row['dob']; ?></td>
                      <td style="border:1px solid black;"><?php echo $row['height']; ?></td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
          </table>
<p> <a href="executeADD.php"> Back Home Page </a></p>


      </body>
  </html>
