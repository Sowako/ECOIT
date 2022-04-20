<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Evaluation HTML</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap"
      rel="stylesheet"
    />
        <link href="contract.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
  <?php 
  if(isset($_GET['reg_err']))
   {
   $err = htmlspecialchars($_GET['reg_err']);

   switch($err)
  {
  case 'success':
   ?>
  <div class="alert alert-success">
     <strong>Succès</strong> inscription réussie !
        </div>
                        
  <?php 
  break;

    case 'name_length':
    ?>
    <div class="alert alert-danger">
       <strong>Erreur</strong> pseudo trop long
       </div>
                        
      <?php 

   }
   }
  ?>
    <header>
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
          <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav mr-auto">
               <img  src="ECOIT.PNG" id="logo"> 
              </div>
            <span class="navbar-text">
              <a href="formation.html"> <img src="college.png"></i>Formation</a>
              <a href="catalogue.html"><img src="catalogue.png"></i>Catalogue</a>
              <a href="contract.html"><img src="contract.png"></i>Postuler</a>
              <a href="aide.html"><img src="help.png"></i>Aide</a>
            <a href="parametre.html"><img src="settings.png"></i>Paramétres</a>
               <a href="#" class="profil"><img  src="profil.png" >Profil</a>
              <a href="deconnexion.php"> <img  src="ON.png">Deconnection</a>
            </span>
          </div>
        </nav>
        </header>
    <div class="row">
    <nav class="col-12" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" ><a href="accueil.html">Accueil</a></li>
          <li class="breadcrumb-item" ><a href="contract.php">Contract</a></li>
        </ol>
    </nav>
        </div>
        <h1> Nouvelle Formation</h1>
<form action="section_traitement.php" method="post">
    <fieldset>
        <label for="titre">Titre</label>
        <input type="name" name="titre" id="titre" required placeholder="Ajouter votre titre">

        <label for="name">Nom de la section</label>
        <input type="name" name="name" id="name" required placeholder="Ajouter un nom">

    </fieldset>
    <button type="submit">Valider</button>
<style>
 

img{
  height:30px;
  width:30px;
}



#logo{
  height:60px;
  width:60px;
}


h1{
  margin-left:400px;
  color:red;
}
form {
        max-width: 50%;
        margin-left: 400px;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    label.inline-label {
        display: inline-block;
    }

    fieldset {
        border: 1px solid lightgray;
        background-color: rgba(225, 233, 255, 0.25);
    }

    legend {
        font-style: italic;
        font-size: 1.1em;
        padding: 5px;
    }

    form input, form select, form textarea {
        display: inline-block;
        margin-bottom: 10px;
        padding: 10px;
        width: 80%;
    }

    form input[type="radio"],
    form input[type="checkbox"],
    form input[type="submit"] {
        width: auto;
    }

    a > img {
      margin-right: 7px;
  }
  
  a{
      margin-right: 10px;
  }
  </style>
 </body>
</html>