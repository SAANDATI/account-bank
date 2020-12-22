<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="barre.css">
    <link rel="stylesheet" href="form.css">
    <title>Table Compte</title>
</head>
<body>
<div class="container">
      <div class="col-md-12 jumbotron">
        <div class="topnav">
          <a class="active" href="index.php">Accueil</a>
          <a href="login.php" >Comptes</a>
          <a href="idAdmin.php">Administrateurs</a>
          <a href="idClient.php">Clients</a>
          <a href="idopera.php">Opérations</a>
          <a href="idContact.php">Contact</a>
          <div class="search-container">
            <form action="contact.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div><br />
    <?php
        try {
          $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
            $sql = "SELECT * FROM compte";
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
          <thead class="thead-light">
            <tr>
              <th><a href="formCompte.php"><button type="button" class="btn btn-primary">
              ajouter</button></a></th>
            </tr>
          </thead>
        </table>
      </div>
     <div class="container col-md-12">
        <table class="table table-bordered">
          <tr class='bg-info'>
            <th>ID</th><th>IdClient</th><th>IdAdmin</th><th>IdTypeCompte</th>
            <th>Solde</th><th>TypeCompte</th>
            <th><button type="button" class="btn btn-danger">Delete</button></th>
          </tr>
          <?php foreach($rows as $row): ?>
            <tr>
              <td><?php echo $row['IdCompte'] ?></td>
              <td><?php echo $row['IdClient'] ?></td>
              <td><?php echo $row['IdAdmin'] ?></td>
              <td><?php echo $row['IdTypeCompte'] ?></td>
              <td><?php echo $row['Solde'] ?></td>
              <td><?php echo $row['TypeCompte'] ?></td>
              <td><a onclick="return confirm('Voulez-vous supprimer cette compte?');"
               href="supprimeCompte.php?IdCompte=<?php echo $row['IdCompte'] ?>"><button type="button" class="btn btn-danger">delete</button></a></td>
              <a href="traitement.php?IdCompte=<?php echo $row['IdCompte'] ?>"></a>             
            </tr>
          <?php endforeach; ?> 
        </table>
     </div>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>
</html>