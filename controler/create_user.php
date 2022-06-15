<?php

    include_once('../modele/utilisateurs.php');
    include_once('../utils/utils.php');

    $msg = '';
    $msg1 = '';
    $error= '';


    // Vérification de la présence des différents champs dans ma superglobale
    if (isset($_POST['radioS']) && !empty($_POST['radioS'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['age']) && !empty($_POST['age'])
        && isset($_POST['mail']) && !empty($_POST['mail'])
        && isset($_POST['mail2']) && !empty($_POST['mail2'])
        && isset($_POST['mdp']) && !empty($_POST['mdp'])
        && isset($_POST['mdp2']) && !empty($_POST['mdp2'])
        ){
        
        
            $mail_user = valid_donnees($_POST['mail']);
            $mail2 = valid_donnees($_POST['mail2']);
            $mdp_user = valid_donnees($_POST['mdp']);
            $mdp2 = valid_donnees($_POST['mdp2']);
            $id_genre = intval($_POST['radioS'],10);
            $login = valid_donnees($_POST['login']);
            

            // Une fois les informations entrées on engage nos tests avant de préparer l'insertion
                // Vérification de correspondance des champs entre eux
            if($mdp_user == $mdp2){

                $name_user = valid_donnees($_POST['nom']);
                $firstName_user = valid_donnees($_POST['prenom']);
                $age_user = $_POST['age'];

                $mdp_user = password_hash($mdp_user, PASSWORD_BCRYPT);

                
                if($mail_user == $mail2){
                    if(strlen($firstName_user) <= 49 && strlen($name_user) <= 49
                    && preg_match("^[a-zA-Z0-9_]*$^",$firstName_user)
                    && preg_match("^[a-zA-Z0-9_]*$^",$name_user)
                    && filter_var($mail_user, FILTER_VALIDATE_EMAIL)
                ) {
                
                    // Maintenant on instancie notre utilisateur avec les setteurs de notre modèle
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
                    

                    if($nbrUser >0){
                        $error= "<p style='color:red;'> Ce mail est déjà utilisé, veuillez verifier que vous n'ayez pas déjà un compte</p>";
                        
                    } else if($nbrUser2 >0){
                        $error=  " <p style='color:red;'>Ce pseudo est déjà utilisé, veuillez en choisir un autre </p>";

                    } else{
                        
                        //Une fois nos vérifications effectuées on finalise l'insertion 
                        if($user->createUser()){
                            $return = $user->getSingleUser();
                            $nbrUser = $return->rowCount();

                            if($nbrUser == 0){
                                $error =  " Il y a eu une erreur lors de l'enregistrement veuillez entrer vos informations à nouveau";

                            } else{
                                $req = $return->fetch();
                                echo '<script type="text/javascript">';
                                echo 'alert("Félicitation votre compte a bien été créé '.$login.' !")';
                                echo '</script>';
                                session_start();
                                $_SESSION['id'] = $req['id_utilisateur'];
                                $_SESSION['login'] = $login;
                                $_SESSION['mail'] = $mail_user;
                                $_SESSION['age'] = $age_user;
                                header ('location: monespace.php');
                            }
                        
                        }
                    }
                        
                }else{
                $error = "Les informations que vous avez entré ne sont pas valides";
            }
            }else{
                $msg = "Les adresses mail que vous avez entré ne correspondent pas !";
            }
            
        } else{
            $msg1 = "Les mots de passes sont différents !";
        }
        
        
    }

?>