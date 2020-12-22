<?php
  // $servername = "localhost";
  // $username = "root";
  // $password = "1994";
  // $dbname = "gestioncomptebancaire";

  try {
    $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      $sql = "SELECT * FROM administrateur";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      $sql = "SELECT * FROM client";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      $sql = "SELECT * FROM compte";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      $sql = "SELECT * FROM operation";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      $sql = "SELECT * FROM typecompte";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      $sql = "SELECT * FROM typeoperation";
        $stmt = $conn -> query($sql);
        $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        var_dump($rows);
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $conn = null; 
?>
