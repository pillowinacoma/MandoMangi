<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  table,td,tr{
    border:1px solid black;
  }
  table{
    border-collapse : collapse;
  }

  </style>
  <body>
    <?php
      include '../functions.php';
      $ptrDB = connexion();
      putenv('PGPASSWORD=123456789');
      $output = (shell_exec('psql -c "\ir ../Database/script1.sql" -U postgres -h localhost mandomangi'));
      $result = pg_query($ptrDB, "SELECT * FROM resteaurant");
      if (!$result) {
        echo "Une erreur s'est produite.\n";
        exit;
      }
      echo "<table>\n\t\t<tr>";
      while ($row = pg_fetch_row($result)) {
        foreach ($row as $key => $value) {
          echo "\n\t\t\t<td>".$value."</td>";
        }
        echo "\n\t\t</tr>";
        echo "\n\t\t<tr>";
      }
      echo "</tr></table>";

     ?>
  </body>
</html>
