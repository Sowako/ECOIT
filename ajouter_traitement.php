<?php 
    require_once 'config.php'; 

    if(!empty($_POST['name']) && !empty($_POST['video']) && !empty($_POST['description']))
    {
        $name = htmlspecialchars($_POST['name']);
        $video = htmlspecialchars($_POST['video']);
        $description = htmlspecialchars($_POST['description']);

            if(strlen($name) <= 100){ 
                             
                            
                            $insert = $bdd->prepare('INSERT INTO ajouter(name, video, description) VALUES(:name, :video, :description)');
                            $insert->execute(array(
                                'name' => $name,
                                'video' => $video,
                                'description' => $description
                            ));
                            
                            header('Location:ajouter.php?reg_err=success');
                            die();
                         }else{ header('Location: ajouter.php?reg_err=pseudo_length'); die();}
    }