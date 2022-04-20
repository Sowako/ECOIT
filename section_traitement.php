<?php 
    require_once 'config.php'; 

    if(!empty($_POST['titre']) && !empty($_POST['name']))
    {
        $titre = htmlspecialchars($_POST['titre']);
        $name = htmlspecialchars($_POST['name']);
    

            if(strlen($name) <= 100){ 
                             
                            
                            $insert = $bdd->prepare('INSERT INTO section(titre, name) VALUES(:titre, :name)');
                            $insert->execute(array(
                                'titre' => $titre,
                                'name' => $name
                                
                            ));
                            
                            header('Location:ajouter.php?reg_err=success');
                            die();
                         }else{ header('Location: section.php?reg_err=name_length'); die();}
    }