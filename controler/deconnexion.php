<?php
var_dump($_SESSION);

if(isset($_POST['deconnect'])){
    var_dump($_SESSION);
    $_SESSION['utilisateur']='';
    session_start();
    session_destroy();
    header('Location: ./index.php');
    exit();
    
}

?>