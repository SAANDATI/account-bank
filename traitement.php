<?php
  $id = $_GET['IdCompte'];
  $idd = $_GET['IdOperation'];
//   $servername = "localhost";
//   $username = "root";
//   $password = "1994";
//   $dbname = "gestioncomptebancaire";

  try {
    $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $sql = "";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue(1, $id, PDO::PARAM_INT);
      $stmt -> bindValue(2, $idd, PDO::PARAM_INT);
      $stmt -> execute(); 
      // Redirection du visiteur vers la page du jeuvideo
      header('location:menu.php');
      $conn = null;
?>