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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
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

        case 'password':
       ?>
           <div class="alert alert-danger">
          <strong>Erreur</strong> mot de passe différent
       </div>
       <?php
       break;

     case 'email':
      ?>
      <div class="alert alert-danger">
     <strong>Erreur</strong> email non valide
      </div>
     <?php
  break;
     case 'email_length':
       ?>
         <div class="alert alert-danger">
           <strong>Erreur</strong> email trop long
          </div>
              <?php 
              case 'already':
                ?>
                  <div class="alert alert-danger">
                  <strong>Erreur</strong> compte deja existant
           </div>
         <?php 

     }
  }
                ?>
    <header>
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav mr-auto">
            <a href="accueil_visiteur.html"><img  src="ECOIT.PNG" id="logo"></a>
              </div>
            <span class="navbar-text">
              <a href="catalogue_visiteur.php"><img src="catalogue.png"></i>Catalogue</a>
              <a href="contract.php"><img src="contract.png"></i>Postuler</a>
              <a href="connexion.php"> <img  src="ON.png">Connection</a>
            </span>
          </div>
        </nav>
        </header>
    <div class="row">
    <nav class="col-12" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" ><a href="indexslide2.php">Accueil</a></li>
          <li class="breadcrumb-item" ><a href="contract.php">Contract</a></li>
        </ol>
    </nav>
        </div>
    <h1>Formulaire d'inscription</h1>
<form action="contract_traitement.php" method="post">
  <fieldset>
    <legend>Information personnel</legend>
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" required placeholder="Votre prénom">

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname" required placeholder="Votre nom">
    
<label for="description">Description des spécialités</label>
    <textarea name="description" id="description" cols="30" rows="10" ></textarea>
</fieldset>
    <fieldset>
        <legend>Informations de connexion</legend>
        <label for="email">Adresse e-mail</label>
        <input type="email" name="email" id="email" required placeholder="Votre adresse e-mail">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required placeholder="Votre mot de passe">

        <label for="password_retype"> Confirmer mot de passe</label>
        <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">

        <label for="picture">Photo de profil</label>
        <input type="file" name="picture" id="picture" required>
    </fieldset>
     <button type="submit">Je souhaite postuler</button>
</form>
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
  
  color:red;
}
form {
        max-width: 50%;
        
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