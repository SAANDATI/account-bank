<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Table Operation</title>
</head>
<body>
    <?php
            
        // $servername = "localhost";
        // $username = "root";
        // $password = "1994";
        // $dbname = "gestioncomptebancaire";

        try {
          $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
            $sql = "SELECT * FROM operation";
            $stmt = $conn -> query($sql);
            $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            //var_dump($rows);
            }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        $conn = null; 
    ?>
     <div class="container col-md-12">
        <table class="table table-bordered">
          <tr class='bg-info'>
            <th>ID</th><th>DateOperation</th><th>IdTypeOperation</th><th>IdCompte</th>
            <th>Montant</th>
          </tr>
          <?php foreach($rows as $row): ?>
            <tr>
              <td><?php echo $row['IdOperation'] ?></td>
              <td><?php echo $row['DateOperation'] ?></td>
              <td><?php echo $row['IdTypeOperation'] ?></td>
              <td><?php echo $row['IdCompte'] ?></td>
              <td><?php echo $row['Montant'] ?></td>
              <a href="retrait.php.php?IdOperation=<?php echo $row['IdOperation'] ?>"></a>             
            </tr>
          <?php endforeach; ?> 
        </table>
     </div>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>
</html>