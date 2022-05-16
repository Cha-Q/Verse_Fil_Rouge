<?php

include_once('./controler/create_user.php');
include_once('./modele/utilisateurs.php');




$msg = ' ';

    
    if(isset($_POST['login']) && isset($_POST['mdp']) ){
        $utilisateur = new User();
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
            
            if(password_verify($mdp, $result['mdp_utilisateur']) == true){
                
                session_start();
                $_SESSION['id'] = $result['id_utilisateur'];
                $_SESSION['login'] = $result['login_utilisateur'];
                $_SESSION['mail'] = $result['mail_utilisateur'];

                    if(isset($_SESSION['id']) && isset($_SESSION['login'] )){
                        $value = $_SESSION['id'];
                        header ('location: monespace.php');
                        $msg = " <h3> let's go !!!!!!!!!</h3>";
                    }else{
                        $msg = '<h3>une erreur est survenue</h3>';
                    }
            } else{
                $msg = "<h3 style='color:black;'>Le mot de passe est incorrect</h3>";
            }
        } else{
            $msg= "<h3>Identifiant incorrect</h3>";
        }
    }


?>