<?php
  try {
    $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $idCpt = $_POST['IdCompte'];
      $idCli = $_POST['IdClient'];
      $idAdmin = $_POST['IdAdmin'];
      $idTypeCpt = $_POST['IdTypeCompte'];
      $solde = $_POST['Solde'];
      $typeCpt = $_POST['TypeCompte'];
      // Insertion du message
      $sql = "INSERT INTO compte VALUES(?, ?, ?, ?, ?, ?)";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue(1, $idCpt, PDO::PARAM_INT);
      $stmt -> bindValue(2, $idCli, PDO::PARAM_INT);
      $stmt -> bindValue(3, $idAdmin, PDO::PARAM_INT);
      $stmt -> bindValue(4, $idTypeCpt, PDO::PARAM_INT);
      $stmt -> bindValue(5, $solde, PDO::PARAM_INT);
      $stmt -> bindValue(6, $typeCpt, PDO::PARAM_STR);
      $stmt -> execute();
      // Redirection du visiteur vers la page du jeuvideo
      header('location:compte.php');
      $conn = null;
?>