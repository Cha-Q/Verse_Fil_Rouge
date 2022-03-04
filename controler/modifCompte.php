<?php
include_once('./modele/utilisateurs.php');
include_once('./utils/utils.php');

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


if (isset($_POST['newlogin']) && isset($_POST['mdp-newlogin'])) {

    $newlogin = valid_donnees($_POST['newlogin']);
    $mdp = valid_donnees($_POST['mdp-newlogin']);
    

    if (!password_verify($mdp, $aaa['mdp_utilisateur'])) {
        
        echo '<script language="javascript">';
        echo 'alert("Etes-vous sûr d\'être celui(celle) que vous prétendez? Le mot de passe ne correspond pas.");';
        echo '</script>';
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
}

?>