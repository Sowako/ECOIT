<?php 
    require_once 'config.php'; 
    
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['description']) && !empty($_POST['email']) && !empty($_POST['password']) 
    && !empty($_POST['password_retype']))
    {
        
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $description = htmlspecialchars($_POST['description']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        
        $check = $bdd->prepare('SELECT  email, password FROM instit WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); 
        
       
        if($row == 0){ 
                if(strlen($email) <= 100){ 
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($password === $password_retype){ 

                            
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                           
                            $ip = $_SERVER['REMOTE_ADDR']; 
                             
                           
                           
                            $insert = $bdd->prepare('INSERT INTO utilisateurs (firstname, lastname, description, email, password, ip, token) VALUES(:firstname, :lastname, :description, 
                            :email, :password, :ip, :token)');
                            $insert->execute(array(
                                'firstname'=> $firstname,
                                'lastname'=> $lastname,
                                'description' => $description,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                           
                            header('Location:contract.php?reg_err=success');
                            die();
                        }else{ header('Location: contract.php?reg_err=password'); die();}
                    }else{ header('Location: contract.php?reg_err=email'); die();}
                }else{ header('Location: contract.php?reg_err=email_length'); die();}
        }else{ header('Location: contract.php?reg_err=already'); die();}
    }