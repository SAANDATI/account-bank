<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="barre.css">
    <link rel="stylesheet" href="form.css">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      * {
        box-sizing: border-box;
      }

      /* style the container */
      .container {
        position: relative;
        border-radius: 5px;
        background-color: rgba(100, 100, 100, 0.6);
        padding: 20px 0 30px 0;
      } 

      /* style inputs and link buttons */
      input,
      .btn {
        width: 70%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
      }

      input:hover,
      .btn:hover {
        opacity: 1;
      }

      /* add appropriate colors to fb, twitter and google buttons */
      .fb {
        background-color: #3B5998;
        color: white;
      }

      .twitter {
        background-color: #55ACEE;
        color: white;
      }

      .google {
        background-color: #dd4b39;
        color: white;
      }

      /* style the submit button */
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      /* Two-column layout */
      .col {
        float: left;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* vertical line */
      .vl {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
      }

      /* text inside the vertical line */
      .vl-innertext {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 50%;
        padding: 8px 10px;
      }

      /* hide some text on medium and large screens */
      .hide-md-lg {
        display: none;
      }

      /* bottom container */
      .bottom-container {
        text-align: center;
        background-color: #666;
        border-radius: 0px 0px 4px 4px;
      }

      /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 650px) {
        .col {
          width: 100%;
          margin-top: 0;
        }
        /* hide the vertical line */
        .vl {
          display: none;
        }
        /* show the hidden text on small screens */
        .hide-md-lg {
          display: block;
          text-align: center;
        }
      }
      p{
        text-align: center; 
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-md-12 jumbotron">
        <div class="topnav">
          <a href="index.php">Accueil</a>
          <a href="idCompte.php" >Comptes</a>
          <a href="idAdmin.php">Administrateurs</a>
          <a href="idClient.php">Clients</a>
          <a href="formOpera.php">Opérations</a>
          <a class="active" href="idContact.php">Contact</a>
          <div class="search-container">
            <form action="contact.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h4>Nos contact a vos opportinites en plus retrouver nous sur les 
      reseaux sociaux.</h4><br />
      <p><strong>ADRESSE </strong>: <I>HLM Grand Yoff Villa N°431</I>.</p>
      <p><strong>TELEPHONE </strong>: <I>(+221) 77 751 56 78</I>.</p>
      <p><strong>E-MAIL </strong>: <I>kassane2014@gmail.com</I>.</p><br /><br />
        <form action="contact.php">
          <div class="row">
            <div class="col">
              <a href="https://www.facebook.com" target="blank" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> <I>Se connecter avec Facebook</I>
              </a>
              <a href="https://www.twitter.com" target="blank" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> <I>Se connecter avec Twitter</I>
              </a>
              <a href="https://www.google.com" target="blank" class="google btn"><i class="fa fa-google fa-fw">
                </i> <I>Se connecter avec Google+</I>
              </a>
            </div>
          </div>
        </form><br /><br />
    </div><br /><br />
    <p>Copyright, 2019 tous les droits réserves.</p>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
