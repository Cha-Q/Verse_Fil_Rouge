<?php
include_once('./modele/utilisateurs.php');
include_once('./utils/utils.php');


$user = new User();

if (isset($_SESSION['login'])) {
    
    //récupération de l'utilisateur
    $log = $_SESSION['login'];
    
    $user->setLogin_user($log);
    
    $myuser = $user->getSingleUser();
    $aaa = $myuser->fetch();

    
    var_dump($myuser);

if (isset($_POST['newlogin']) && isset($_POST['mdp-newlogin'])) {

    $newlogin = valid_donnees($_POST['newlogin']);
    $mdp = valid_donnees($_POST['mdp-newlogin']);
    

    if (!password_verify($mdp, $aaa['mdp_utilisateur'])) {
        
        echo '<script language="javascript">';
        echo 'alert("Etes-vous sûr d\'être celui(celle) que vous prétendez? Le mot de passe ne correspond pas.");';
        echo '</script>';
    } else {
        if ($aaa == true) {
            var_dump($aaa['id_utilisateur']);
            $user->getId_user();
            var_dump($user);
            $user->setLogin_user($newlogin);
            
            $user->updateUser();
            
        $_SESSION['login'] = $log;
        }else{
            echo 'une erreur est survenue';
        }
        
        
    }
}
}

?>