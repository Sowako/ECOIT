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

    case 'pseudo_length':
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
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav mr-auto">
            <a href="accueil_instituteur.html"><img  src="ECOIT.PNG" id="logo"></a>
              </div>
            <span class="navbar-text">
            <a href="ajouter.php"> <img src="add.png"></i>Ajouter une formation</a>
              <a href="aide_instructeur.html"><img src="help.png"></i>Aide</a>
              <a href="deconnexion.php"> <img  src="ON.png">Deconnection</a>
            </span>
          </div>
        </nav>
        </header>
    <div class="row">
    <nav class="col-12" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" ><a href="accueil_instructeur.html">Accueil</a></li>
          <li class="breadcrumb-item" ><a href="ajouter.php">Ajouter</a></li>
        </ol>
    </nav>
        </div>
        <h1> Nouvelle Formation</h1>
<form action="ajouter_traitement.php" method="post">
    <fieldset>
        <label for="name">Titre</label>
        <input type="name" name="name" id="name" required placeholder="Ajouter votre titre">

        <label for="video">Video</label>
        <input type="file" name="video" id="video" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" ></textarea>
    </fieldset>
       <button type="submit">Ajouter</button>
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
  @media screen and (max-width: 768px){
    form, h1{
      margin-left: 0px;
    }
  }
  </style>
 </body>
</html>