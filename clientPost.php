<?php
//   $servername = "localhost";
//   $username = "root";
//   $password = "1994";
//   $dbname = "gestioncomptebancaire";

  try {
    $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $id = $_POST['IdClient'];
      $nom = $_POST['NomClient'];
      $prenom = $_POST['PrenomClient'];
      $adresse = $_POST['AdresseClient'];
      $tel = $_POST['TelephoneClient'];
      $email = $_POST['EmailClient'];
      // Insertion du message
      $sql = "INSERT INTO client VALUES(?, ?, ?, ?, ?, ?)";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue(1, $id, PDO::PARAM_INT);
      $stmt -> bindValue(2, $nom, PDO::PARAM_STR);
      $stmt -> bindValue(3, $prenom, PDO::PARAM_STR);
      $stmt -> bindValue(4, $adresse, PDO::PARAM_STR);
      $stmt -> bindValue(5, $tel, PDO::PARAM_INT);
      $stmt -> bindValue(6, $email, PDO::PARAM_STR);
      $stmt -> execute();
      // Redirection du visiteur vers la page du jeuvideo
      header('location:client.php');
      $conn = null;
?>
