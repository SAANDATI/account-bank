<?php
session_start();
	try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gestioncomptebancaire;charset=utf8', 'root', '');
}   
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    echo "Echec de la connexion";
}
$error= "";
$login = $password = " ";
if (isset($_POST['submit'])){
	if (!empty($_POST['login'])) {
		$login=$_POST['login'];

		if(!empty($_POST['password'])){
			$password=$_POST['password'];
			 $req =$bdd->query("SELECT * from administrateur where login='$login' and password='$password'");

			// $req =$bdd->query("SELECT IdAdmin from administrateur where login='$login' and password='password'");
			$donnee=$req ->rowCount();
			if($donnee==1){
				echo "OK";
			 $req =$bdd->query("SELECT * from administrateur where login='$login' and password='$password'");
			 $reponse=$req->fetch();
			 var_dump($reponse['login']);
			 $_SESSION['login']=$reponse['login'];
			 $_SESSION['NomAdmin']=$reponse['NomAdmin'];
			 $_SESSION['PrenomAdmin']=$reponse['PrenomAdmin'];
			 header('location:client.php');
			}
			else{
				$error="le login ou le mot de pass est incorrect";
			}
		}
		else{
			$error="Mot de pass oblogatoir";
		}
	}
	else{
		$error="Login est oblogatoir";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="text/html">
    <title>Ma page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/login.css">
	<link rel="stylesheet" href="barre.css">
    <link rel="stylesheet" href="form.css">
	<script src="main.js"></script>
	
</head>
<body background="image/13.jpg" body bgproperties="fixed">
<!-- <div class="container"> -->
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

    <div class="container">
    <div class="col-md-5-form">
		
			<form action="" method="post">
			<div class="input" align="center"> <h4> Administrateur</h4></div>
			<p> <label>Login :</label> <input type="text" name="login"/></p>
			<p> <label>   Mot de pass :</label>  <input type="password" name="password"/></p>
			 <p><label> <input name="submit" type="submit" value="Me connecter"/></label></p> 
			</form>
	</div> 
	<!-- </div> -->
   <?php  
   		echo "$error";
   ?>  
</body>
</html>