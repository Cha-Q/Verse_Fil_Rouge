<?php

    include_once('./modele/utilisateurs.php');
    include_once('./utils/utils.php');

    
    if (isset($_POST['radioS']) 
        && isset($_POST['prenom']) 
        && isset($_POST['nom']) 
        && isset($_POST['login']) 
        && isset($_POST['age']) 
        && isset($_POST['mail']) 
        && isset($_POST['mail2']) 
        && isset($_POST['mdp']) 
        && isset($_POST['mdp2'])
        ){

        
        $mail_user = valid_donnees($_POST['mail']);
        $mail2 = valid_donnees($_POST['mail2']);
        $mdp_user = valid_donnees($_POST['mdp']);
        $mdp2 = valid_donnees($_POST['mdp2']);
        $id_genre = intval($_POST['radioS'],10);
        $login = valid_donnees($_POST['login']);
        
        if($mdp_user == $mdp2){

            $name_user = valid_donnees($_POST['nom']);
            $firstName_user = valid_donnees($_POST['prenom']);
            $age_user = valid_donnees($_POST['age']);

            $mdp_user = password_hash($mdp_user, PASSWORD_BCRYPT);

            if($mail_user == $mail2){
                if(strlen($firstName_user) <= 20 && strlen($name_user) <= 20
                && preg_match("^[a-zA-Z0-9_]*$^",$firstName_user)
                && preg_match("^[a-zA-Z0-9_]*$^",$name_user)
                && filter_var($mail_user, FILTER_VALIDATE_EMAIL)
            ) {
                $user = new User();

                $user->setName_user($name_user);
                $user->setFirstName_user($firstName_user);
                $user->setAge_user($age_user);
                $user->setMail_user($mail_user);
                $user->setLogin_user($login);
                $user->setMdp_user($mdp_user);
                $user->setId_genre($id_genre);
                

                $checkUser = $user->verifyMail();
                $nbrUser = $checkUser->rowCount();

                $checkUser2 = $user->verifyLogin();
                $nbrUser2 = $checkUser2->rowCount();
                

                if($nbrUser >0 && $nbrUser2 >0){
                    echo "Avez-vous déjà un compte? Votre mail et votre pseudo sont déjà dans notre base de donnée !";
                    
                } else if($nbrUser2 >0){
                    echo "Ce pseudo est déjà utilisé, veuillez en choisir un autre";

                } else if($nbrUser >0){
                    echo "Ce mail est déjà utilisé, veuillez verifier que vous n'ayez pas déjà un compte";

                } else{
                    if($user->createUser()){
                        $return = $user->getSingleUser();
                        $nbrUser = $return->rowCount();

                        if($nbrUser == 0){
                            echo " Il y a eu une erreur lors de l'enregistrement veuillez entrer vos informations à nouveau";

                        } else{
                            echo "c'est bon ton compte est créé le sang !";
                            session_start();
                            
                            $_SESSION['login'] = $login;
                            $_SESSION['mail'] = $mail_user;
                            $_SESSION['age'] = $age_user;
                            header ('location: monespace.php');

                        }
                    
                    }
                }
                    
            }else{
            echo "Les informations que vous avez entrée ne sont pas valides";
        }
        }else{
            echo "Les adresses mail que vous avez entré ne correspondent pas";
        }
        
    } else{
        echo "Vos mots de passes sont différents !";
    }
        
        
    }

?>