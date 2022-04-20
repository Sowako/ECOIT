<?php 
    session_start(); 
    require_once 'config.php'; 

    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {
        
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); 
        
       
        $check = $bdd->prepare('SELECT  email, password, type, token FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
    

       
        if($row > 0)
        {
           
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
               
                if(password_verify($password, $data['password']))
                {
                   if($data['type'] == 'instituteurs'){
                    $_SESSION['user'] = $data['token'];
                    header('Location: landing_instituteur.php');
                    die();
                   }else{
                    $_SESSION['user'] = $data['token'];
                    header('Location: landing.php');
                   }
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} 

    