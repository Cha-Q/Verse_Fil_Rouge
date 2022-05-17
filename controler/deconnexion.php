<?php

if(isset($_POST['deconnect'])){
    
    $_SESSION['utilisateur']='';
    session_start();
    session_destroy();
    header('Location: index.php');
    exit();
}

?>