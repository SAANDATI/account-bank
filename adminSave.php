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
      $id = $_POST['IdAdmin'];
      $nom = $_POST['NomAdmin'];
      $prenom = $_POST['PrenomAdmin'];
      $adresse = $_POST['AdresseAdmin'];
      $tel = $_POST['TelephoneAdmin'];
      $email = $_POST['EmailAdmin'];

      $sql = "UPDATE administrateur SET IdAdmin=:IdAdmin, NomAdmin=:NomAdmin, PrenomAdmin=:PrenomAdmin, AdresseAdmin=:AdresseAdmin, 
      TelephoneAdmin=:TelephoneAdmin, EmailAdmin=:EmailAdmin WHERE IdAdmin=:IdAdmin";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue('IdAdmin', $id, PDO::PARAM_INT);
      $stmt -> bindValue('NomAdmin', $nom, PDO::PARAM_STR);
      $stmt -> bindValue('PrenomAdmin', $prenom, PDO::PARAM_STR);
      $stmt -> bindValue('AdresseAdmin', $adresse, PDO::PARAM_STR);
      $stmt -> bindValue('TelephoneAdmin', $tel, PDO::PARAM_INT);
      $stmt -> bindValue('EmailAdmin', $email, PDO::PARAM_STR);
      $stmt -> execute();
      // Redirection du visiteur vers la page du jeuvideo
      header('location:administrateur.php');
      $conn = null;
?>