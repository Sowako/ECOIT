
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
        <link href="catalogue.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
       
  </head>
  <body>
    <header>
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav mr-auto">
            <a href="accueil.html"><img  src="ECOIT.PNG" id="logo"></a> 
              </div>
            <span class="navbar-text">
              <a href="catalogue.php"><img src="catalogue.png"></i>Catalogue</a>
              <a href="aide.html"><img src="help.png"></i>Aide</a>
               <img  src="ON.png">
              <a href="deconnexion.php">Deconnection</a>
            </span>
          </div>
        </nav>
       
      </header>
    

        <div class="row">
    <nav class="col-12" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" ><a href="accueil.html">Accueil</a></li>
          <li class="breadcrumb-item" ><a href="catalogue.html">Catalogue</a></li>
        </ol>
        <div class="input-group">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" id="serach" class="btn btn-outline-primary">search</button>
        </div>
        <div class="progression">
            <h5>Progression</h5>
            <progress value="0" max="100" id=p1>0%</progress>
        </div>
    </nav>
        </div>
       
       

        <div class="wrapper">
          <div >
            <button class="button"  role="button">En cours </button>
            <button class="button" onClick='incr()' role="button">Terminé </button>
            <a href="lecon12.html">
            <h4> Lorem ipsum </h4>
          <img src="slider1.png"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div >
            <button class="button"  role="button">En cours </button>
            <button class="button" onClick='incr()' role="button">Terminé </button>
            <a href="lecon12.html">
            <h4> Lorem ipsum </h4>
          <img src="slider2.jpg"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div >
            <button class="button"  role="button">En cours </button>
            <button class="button" onClick='incr()' role="button">Terminé </button>
            <a href="lecon12.html">
            <h4> Lorem ipsum </h4>
          <img src="slider3.webp"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
          <div>
            <button class="button"  role="button">En cours </button>
            <button class="button" onClick='incr()' role="button">Terminé </button>
            <a href="lecon12.html">
            <h4> Lorem ipsum </h4>
          <img src="photo1.jpg"  class="image" width="300" height="300">
         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </a>
          </div>
        </div>
        <script>
        

          function incr() {
          var v1=document.getElementById('p1').value;
          document.getElementById("p1").value= v1 + 10;
          }
          </script>
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

.button {
  align-items: center;
  appearance: none;
  background-color: #fff;
  border-radius: 24px;
  border-style: none;
  box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
  box-sizing: border-box;
  color: #3c4043;
  cursor: pointer;
  display: inline-flex;
  fill: currentcolor;
  font-family: "Google Sans",Roboto,Arial,sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 30px;
  justify-content: center;
  letter-spacing: .25px;
  line-height: normal;
  max-width: 35%;
  overflow: visible;
  padding: 2px 24px;
  position: relative;
  text-align: center;
  text-transform: none;
  transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
  will-change: transform,opacity;
  z-index: 0;
  float: end;
}

.button:hover {
  background: #F6F9FE;
  color: #174ea6;
}

.button:active {
  box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
  outline: none;
}

.button:focus {
  outline: none;
  border: 2px solid #4285f4;
}

.button:not(:disabled) {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button:not(:disabled):hover {
  box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
}

.button:not(:disabled):focus {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button:not(:disabled):active {
  box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
}

.button:disabled {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.input-group{
    width: 250px;
    float: right;
  }
  .progression{
    float: right;
    margin-right: 20px;
   }
 
   .progression h5{
       color:green;
   }
  </style>
        
 </body>
</html>