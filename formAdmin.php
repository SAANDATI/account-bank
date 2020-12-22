<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/login.css">
    <link rel="stylesheet" href="barre.css">
    <link rel="stylesheet" href="form.css">
    <script src="main.js"></script>
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
    <form action="adminPost.php" method="post" enctype="multipart/form-data"> 
    <div class="input-form" align="center"> <h4> Formulaire d'insertion</h4></div>
    <table>
    <p>
      <label for="id">Identifiant</label>  
     <input type="number" name="IdAdmin" id="id" size="25px" required placeholder="identifiant" />
    </p> <br/>
    <p>
     <label for="nom">Nom</label>  
    <input type="text" name="NomAdmin" id="nom" size="25px" required placeholder="nom" />
    </p> <br/>
    <p>
       <label for="prenom">Prenom</label> 
      <input type="text" name="PrenomAdmin" id="prenom" size="25px" required placeholder="prenom" />
    </p> <br/>
    <p>
      <label for="adresse">Adresse</label>  
      <input type="text" name="AdresseAdmin" id="adresse" size="25px" required placeholder="adresse" />
    </p> <br/>
    <p>
      <label for="telephone">Téléphone</label> 
      <input type="text" name="TelephoneAdmin" id="telephone" size="25px" required placeholder="numero telephone" /> 
    </p> <br/>
    <p>
     <label for="email">E-mail</label> 
     <input type="E-mail" name="EmailAdmin" id="email" size="25px" required placeholder="example@gmail.com" />
    </p> 
    <p>
      <input type="submit" value="Envoyer" />
    </p> 
    </table>
    </form> 
  <!-- </div>   -->
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> 
  </body>
</html>