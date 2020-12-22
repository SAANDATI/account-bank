<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="barre.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="formOpera.css">
    <title>Form opéra</title>
  </head>
  <body>
 
    <div class="container">
      <div class="col-md-12 jumbotron">
        <div class="topnav">
          <a href="menu.php">Accueil</a>
          <a href="idCompte.php" >Comptes</a>
          <a href="idAdmin.php">Administrateurs</a>
          <a href="idClient.php">Clients</a>
          <a class="active" href="formOpera.php">Opérations</a>
          <a href="idContact.php">Contact</a>
          <div class="search-container">
            <form action="contact.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div style="padding-left:16px">
      <h3>Bienvenue dans l'interface de gestion de compte bancaire</h3>
    </div><br />
    <style>
      .for{
        float:right;
        display: inline-block;
      }
      </style>
    
    <!-- <div class="sms"> -->
    <div class="container ">
      <div class="col-md-5 jumbotron for">
        <form method="post" action="retrait.php" enctype="multipart/form-data">
          <fieldset>
            <p>
              <label for="id">Identifiant de l'opération</label>
              <input type="number" name="IdOperation" id="id" size="20px" />
            </p>
            <p>
              <label for="date">Date de l'opération</label>
              <input type="date" name="DateOperation" id="date" size="20px" />
            </p>
            <p>
              <label for="idtype">Identifiant du type de l'opération</label>
              <input type="number" name="IdTypeOperation" id="idtype" size="20px" required />
            </p>
            <p>
              <label for="idcpt">Identifiant du compte</label>
              <input type="number" name="IdCompte" id="idcpt" size="20px" required />
            </p>
            <p>
              <label for="montant">Montant Retrait</label>
              <input type="number" name="Montant" id="montant" size="20px" />
            </p>
            <p>
              <input type="submit" value="Retrait" />
            </p>
            <p>
              <input type="reset" value="Réinisialiser" />
            </p>
          </fieldset>
        </form>        
      </div>
    </div>
      
    <div class="container">
      <div class="col-md-5 jumbotron">
        <form method="post" action="depot.php" enctype="multipart/form-data">
          <fieldset>
            <p>
              <label for="id">Identifiant de l'opération</label>
              <input type="number" name="IdOperation" id="id" size="20px" />
            </p>
            <p>
              <label for="date">Date de l'opération</label>
              <input type="date" name="DateOperation" id="date" size="20px" />
            </p>
            <p>
              <label for="idtype">Identifiant du type de l'opération</label>
              <input type="number" name="IdTypeOperation" id="idtype" size="20px" required />
            </p>
            <p>
              <label for="idcpt">Identifiant du compte</label>
              <input type="number" name="IdCompte" id="idcpt" size="20px" required />
            </p>
            <p>
              <label for="montant">Montant Dépot</label>
              <input type="number" name="Montant" id="montant" size="20px" />
            </p>
            <p>
              <input type="submit" value="Dépot" />
            </p>
            <p>
              <input type="reset" value="Réinisialiser" />
            </p>
          </fieldset>
        </form>
      </div> 
    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>