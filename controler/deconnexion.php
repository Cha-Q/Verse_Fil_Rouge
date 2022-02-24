<?php


if(isset($_POST['deconnect'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
    session_unset();
    session_destroy();
    
    echo '<script language="javascript">';
                echo 'alert("Etes-vous sûr d\'être celui(celle) que vous prétendez? Le mot de passe ne correspond pas.");';
                echo '</script>';

}

?>