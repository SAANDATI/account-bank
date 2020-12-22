<?php
  $id = $_GET['IdAdmin'];
  // $servername = "localhost";
  // $username = "root";
  // $password = "1994";
  // $dbname = "gestioncomptebancaire";

  try {
      $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $sql = "SELECT * FROM administrateur WHERE IdAdmin=?";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue(1, $id, PDO::PARAM_INT);
      $stmt -> execute();
      $row = $stmt -> fetch(PDO::FETCH_OBJ); 
      // Redirection du visiteur vers la page du jeuvideo
      if(!$row){
         header('location:administrateur.php');
        }
      $conn = null;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Modification</title>
  </head>
  <body>
      <h3>Formulaire d'insertion</h3>
      <form action="adminSave.php" method="post" enctype="multipart/form-data"> 
    <p>
      <label for="id">Identifiant</label> : <input type="number" name="IdAdmin" id="id"
       size="25px" value = "<?php echo $row -> IdAdmin ?>" required placeholder="identifiant" />
    </p>
    <p>
      <label for="nom">Nom</label> : <input type="text" name="NomAdmin" id="nom"
       size="25px" value = "<?php echo $row -> NomAdmin ?>" required placeholder="nom" />
    </p>
    <p>
      <label for="prenom">Prenom</label> : <input type="text" name="PrenomAdmin" id="prenom"
       size="25px" value = "<?php echo $row -> PrenomAdmin ?>" required placeholder="prenom" />
    </p>
    <p>
      <label for="adresse">Adresse</label> : <input type="text" name="AdresseAdmin" id="adresse"
       size="25px" value = "<?php echo $row -> AdresseAdmin ?>" required placeholder="adresse" />
    </p>
    <p>
      <label for="telephone">Téléphone</label> : <input type="text" name="TelephoneAdmin" id="telephone"
       size="25px" value = "<?php echo $row -> TelephoneAdmin ?>" required placeholder="numero telephone" />
    </p>
    <p>
      <label for="email">E-mail</label> : <input type="E-mail" name="EmailAdmin" id="email"
       size="25px" value = "<?php echo $row -> EmailAdmin ?>" required placeholder="example@gmail.com" />
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p> 
    </form>
  </body>
</html>