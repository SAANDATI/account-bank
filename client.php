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
    <title>Table client</title>
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
            $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
            $sql = "SELECT * FROM client";
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
              <th><a href="formCli.php"><button type="button" class="btn btn-primary">
              Insert</button></a></th>
            </tr>
          </thead>
        </table>
      </div>
     <div class="container col-md-12">
        <table class="table table-bordered">
          <tr class='bg-info'>
            <th>ID</th><th>Nom</th><th>Prenomr</th><th>Adresse</th>
            <th>Téléphone</th><th>E-mail</th>
            <th><button type="button" class="btn btn-success">Update</button></th>
            <th><button type="button" class="btn btn-danger">Delete</button></th>
          </tr>
          <?php foreach($rows as $row): ?>
            <tr>
              <td><?php echo $row['IdClient'] ?></td>
              <td><?php echo $row['NomClient'] ?></td>
              <td><?php echo $row['PrenomClient'] ?></td>
              <td><?php echo $row['AdresseClient'] ?></td>
              <td><?php echo $row['TelephoneClient'] ?></td>
              <td><?php echo $row['EmailClient'] ?></td>
              <td><a onclick="return confirm('Etes-vous sur de vouloir faire des modifications?');"
               href="updateCli.php?IdClient=<?php echo $row['IdClient'] ?>"><button type="button" class="btn btn-success">update</button></a></td>
              <td><a onclick="return confirm('Voulez-vous supprimer ce client?');"
               href="deleteCli.php?IdClient=<?php echo $row['IdClient'] ?>"><button type="button" class="btn btn-danger">delete</button></a></td>
            </tr>
          <?php endforeach; ?> 
        </table>
     </div>
     <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>
</html>