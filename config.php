
<?php
  
  $bdd = "";
     
  try {
     
    
   
    $bdd = new PDO(
        "mysql:host=localhost:3306; dbname=loginpage",
        "root", ""
    );
    $bdd->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
    
  ?>