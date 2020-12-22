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

      $sql = "UPDATE client SET IdClient=:IdClient, NomClient=:NomClient, PrenomClient=:PrenomClient, AdresseClient=:AdresseClient, 
      TelephoneClient=:TelephoneClient, EmailClient=:EmailClient WHERE IdClient=:IdClient";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue('IdClient', $id, PDO::PARAM_INT);
      $stmt -> bindValue('NomClient', $nom, PDO::PARAM_STR);
      $stmt -> bindValue('PrenomClient', $prenom, PDO::PARAM_STR);
      $stmt -> bindValue('AdresseClient', $adresse, PDO::PARAM_STR);
      $stmt -> bindValue('TelephoneClient', $tel, PDO::PARAM_INT);
      $stmt -> bindValue('EmailClient', $email, PDO::PARAM_STR);
      $stmt -> execute();
      // Redirection du visiteur vers la page du jeuvideo
      header('location:client.php');
      $conn = null;
?>