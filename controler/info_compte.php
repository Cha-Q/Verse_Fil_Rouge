<?php
include_once('./modele/utilisateurs.php');
include_once('./utils/utils.php');

$msg = '';
$msg1 = '';
$msg2 = '';


// modification du login de l'utilisateur
$user = new User();

if (isset($_SESSION['login'])) {
    
    //récupération de l'utilisateur
    $log = $_SESSION['login'];
    
    $user->setLogin_user($log);
    
    $myuser = $user->getSingleUser();
    $aaa = $myuser->fetch();

    $user->setId_user($aaa['id_utilisateur']);
    $user->setLogin_user($aaa['login_utilisateur']);
    $user->setMail_user($aaa['mail_utilisateur']);
    
    $user->setMdp_user($aaa['mdp_utilisateur']);
    
    $birthday = new DateTime($aaa['age_utilisateur']);
    $today = new DateTime(date('Y-m-d'));
    
    $ageVal = $birthday->diff($today);
    $_SESSION['age'] = $ageVal->y;
    
    // modification du login de l'utilisateur'
    if (isset($_POST['newlogin']) && !empty($_POST['newlogin']) && isset($_POST['mdp-newlogin']) && !empty($_POST['mdp-newlogin'])) {

        $newlogin = valid_donnees($_POST['newlogin']);
        $mdp = valid_donnees($_POST['mdp-newlogin']);
        

            if (!password_verify($mdp, $aaa['mdp_utilisateur'])) {
                
                $msg = '<p style="text-align: center;"> Mauvais mot de passe, try again !</p>';
            } else {

                if ($aaa == true) {
                    $user->setId_user(intval($aaa['id_utilisateur'],10));
                    
                    $user->setLogin_user($newlogin);
                    
                    $user->updateUser();
                    
                    $_SESSION['login'] = $newlogin;
                    header ('location: monespace.php');
                
                }else{
                    echo 'une erreur est survenue';
                }
                
                
            }
    }
    // modification du mot de passe
    if (isset($_POST['newmdp']) && !empty($_POST['newmdp']) && isset($_POST['mdp-newmdp']) && !empty($_POST['mdp-newmdp'])){

        $newMdp = valid_donnees($_POST['newmdp']);
        $prevMdp= valid_donnees($_POST['mdp-newmdp']);
    
        if (!password_verify($prevMdp, $aaa['mdp_utilisateur'])) {
        
            $msg1 = '<p> Mauvais mot de passe, try again !</p>';
        } else {
            if ($aaa == true) {

                $newMdp = password_hash($newMdp, PASSWORD_BCRYPT);

                $user->setId_user(intval($aaa['id_utilisateur'],10));
                $_SESSION['login'] = $aaa['login_utilisateur'];
                $user->setMdp_user($newMdp);
                
                $user->updateUser();
                
                echo '<script language="javascript">';
                echo 'alert("c est bon.");';
                echo '</script>';
                header ('location: monespace.php');
            
            }else{
                echo '<script language="javascript">';
                echo 'alert("c est pas bon.");';
                echo '</script>';
            }
        }
    }

    if(isset($_POST['mdpSuppr']) && isset($_POST['mpdConf'])){
        
        
        $mdp1 = valid_donnees($_POST['mdpSuppr']);
        $mdp2 = valid_donnees($_POST['mpdConf']);

        $utilisateur = $_SESSION['login'];

            if(!password_verify($mdp1, $aaa['mdp_utilisateur']) && !password_verify($mdp2, $aaa['mdp_utilisateur'])){

                $msg2 = '<p> Mauvais mot de passe, try again !</p>';

            } else{

                if($aaa == true){
                    
                    $idDelete = $aaa['id_utilisateur'];
                    $user->setId_user($idDelete);
                    $user->deleteUser();

                    echo '<script language="javascript">';
                    echo 'alert("Votre compte a bien été supprimé !!!!!!!!!!!!
                    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");';
                    echo '</script>';
                    $_SESSION['utilisateur']='';
                    
                    session_destroy();
                    header('Location: ./index.php');
                    exit();
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Il y a encore une merde le aaa est false");';
                    echo '</script>';
                }
            }


    }

}

?>