
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
 
        <link href="catalogue.css" rel="stylesheet" type="text/css" />
       
  </head>
  <body>
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
               <img  src="ON.png">
              <a href="connexion.php">Connection</a>
            </span>
          </div>
        </nav>
       
      </header>
    

        <div class="row">
    <nav class="col-12" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" ><a href="indexslide2.php">Accueil</a></li>
          <li class="breadcrumb-item" ><a href="catalogue_visiteur.php">Catalogue</a></li>
        </ol>
        <div class="input-group">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" id="serach" class="btn btn-outline-primary">search</button>
        </div>
        
    </nav>
        </div>
       
       

        <div class="wrapper">
          <div ><a href="#">
            <h4> Lorem ipsum </h4>
          <img src="slider1.png"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div ><a href="#">
            <h4> Lorem ipsum </h4>
          <img src="slider2.jpg"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div ><a href="#">
            <h4> Lorem ipsum </h4>
          <img src="slider3.webp"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div ><a href="#">
            <h4> Lorem ipsum </h4>
          <img src="photo1.jpg"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
         
        </div>
  
<style>
  
.wrapper img{
border-radius: 15%;
float: left;
margin-left: 10px;
margin-bottom: 20px;
}

.wrapper h4{
text-align: center;
}

.wrapper button{
  margin-right: 10px;
  float:right;
}


nav img{
 height: 30px;
 width: 30px;
}


.profil{
  margin-right: 20px;
}

#logo{
  height:60px;
  width:60px;
}





a > img {
  margin-right: 7px;
}

a{
  margin-right: 10px;
}

.wrapper {
  display: grid;
  grid-template-columns: 10fr;
  
}

.wrapper > div{
  border-bottom: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  margin-right: 10px;
  margin-left: 10px;
  margin-top: 30px;
  height: auto;
}

.input-group{
  width: 250px;
  float: right;
}

.wrapper > div > button{
  float:bottom;
  float:right;
 
}

image{
  float:right;
}


  </style>
        
 </body>
</html>