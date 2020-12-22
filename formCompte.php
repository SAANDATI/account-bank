<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/login.css">
      <link rel="stylesheet" href="barre.css">
      <script src="main.js"></script>
      <title>Ajout compte</title>
  </head>
  <body>
  <!-- <div class="container"> -->
      <div class="col-md-12 jumbotron">
        <div class="topnav">
          <a class="active" href="index.php">Accueil</a>
          <a href="idCompte.php" >Comptes</a>
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

  <div class="container-form">
    <form action="comptePost.php" method="post" enctype="multipart/form-data"> 
    <div class="input-form" align="center"> <h4> Formulaire d'insertion</h4></div>
    <p>
      <label for="id">Identifiant compte</label>  <input type="number" name="IdCompte" id="id" size="25px" required placeholder="identifiant compte" />
    </p>
    <p>
      <label for="id">Identifiant client</label>  <input type="number" name="IdClient" id="id" size="25px" required placeholder="identifiant client" />
    </p>
    <p>
      <label for="id">Identifiant admin</label>  <input type="number" name="IdAdmin" id="id" size="25px" required placeholder="identifiant admin" />
    </p>
    <p>
      <label for="id">Identifiant typeCompte</label>  <input type="number" name="IdTypeCompte" id="id" size="25px" required placeholder="identifiant typeCompte" />
    </p>
    <p>
      <label for="solde">Solde</label>  <input type="text" name="Solde" id="solde" size="25px" required placeholder="solde compte" />
    </p>
    <p>
      <label for="typecompte">Type de compte</label>  <input type="text" name="TypeCompte" id="typecompte" size="25px" required placeholder="type de compte" />
    </p>
    <p>
      <input type="submit" value="Enregistrer" />
    </p> 
    </form>
    <!-- </div> -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>



