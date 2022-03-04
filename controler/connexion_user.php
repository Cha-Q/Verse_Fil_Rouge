<?php

include('./controler/create_user.php');
include_once('./modele/utilisateurs.php');


$utilisateur = new User();

    
    if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['mdp']) && !empty($_POST['mdp'])){
        $login = valid_donnees($_POST['login']);
        $mdp = valid_donnees($_POST['mdp']);
        try{
            $utilisateur->setLogin_user($login);
            $utilisateur->setMail_user($login);
            $req = $utilisateur->getSingleUser();

        } catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        
        $result = $req->fetch();
        
        if($result == true){
            if(password_verify($mdp,$result['mdp_utilisateur'])==true){
                
                session_start();
                $_SESSION['id'] = $result['id_utilisateur'];
                $_SESSION['login'] = $result['login_utilisateur'];
                $_SESSION['mail'] = $result['mail_utilisateur'];
                    if(isset($_SESSION['id']) && isset($_SESSION['login'] )){
                        $value = $_SESSION['id'];
                        
                        header ('location: monespace.php');
                    }else{
                        echo 'une erreur est survenue';
                    }
            } else{
                echo "Le mot de passe est incorrect";
            }
        } else{
            echo "Identifiant incorrect";
        }
    }





?>