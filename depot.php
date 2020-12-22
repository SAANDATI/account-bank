<?php

  try {
    $conn = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn -> setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
      $id = $_POST['IdOperation'];
      $date = $_POST['DateOperation'];
      $idtype = $_POST['IdTypeOperation'];
      $idcpt = $_POST['IdCompte'];
      $montant = $_POST['Montant'];
      // Insertion du message
      $sql = "INSERT INTO operation VALUES(?, ?, ?, ?, ?)";
      $stmt = $conn -> prepare($sql);
      $stmt -> bindValue(1, $id, PDO::PARAM_INT);
      $stmt -> bindValue(2, $date, PDO::PARAM_STR);
      $stmt -> bindValue(3, $idtype, PDO::PARAM_INT);
      $stmt -> bindValue(4, $idcpt, PDO::PARAM_INT);
      $stmt -> bindValue(5, $montant, PDO::PARAM_INT);
      $stmt -> execute();
      // Redirection du visiteur vers la page du jeuvideo
      header('location:operation.php');
      $conn = null;
?>

<?php

?>